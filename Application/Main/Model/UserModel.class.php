<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

namespace Main\Model;
use Think\Model;

/**
 * 用户模型
 */

class UserModel extends Model {

    public function deleteUserById($user_id) {
		$this -> startTrans();
		$result = 1;
		$where['user_id'] = $user_id;
		$result = $this -> where($where) -> delete();
		$result = $result && M('user_hero') -> where($where) -> delete();
		
		$this -> commit();    
		return $result;
	}
	
	public function deletUsers($id, $model) {
		// model  = account
		$this -> startTrans();
		$result = 1;
		
		$id_name = $model . '_id';
		
		$where[$id_name] = $id;
		$result = M($model) -> where($where) -> delete();
		$users = $this -> where($where) -> select();
		for ($i = 0; $i < count($users); $i++ ) {
			$result = $result && $this -> deleteUserById($users[$i]['user_id']);
		}
		
		 $this -> commit();    
		return $result;
	}
	// public function deleteAccountAndUserByAccount($account_id) {
		// $this -> startTrans();
		// $result = 1;
		
		// $where['account_id'] = $account_id;
		// $result = M('account') -> where($where) -> delete();
		// $users = $this -> where($where) -> select();
		// for ($i = 0; $i < count($users); $i++ ) {
			// $result = $result && $this -> deleteUserById($users[$i]['user_id']);
		// }
		
		 // $this -> commit();    
		// return $result;
	// }
	
	public function getUserDetailById($user_id) {
		
		$user = $this -> where("user_id=%d", array($user_id)) -> find();
		$heroMdl = M('hero');
		
		$sql = "select user_id, GROUP_CONCAT(hero_id) as heros from wzry_user_hero where user_id = " . "$user_id";
		
		$hero_result = M() -> query($sql);
		
		$hero = explode(',', $hero_result[0]['heros']);
		// echo "<pre>";var_dump($hero);die;
		$area = M('area') -> find($user['area_id']);
		$account = M('account') -> find($user['account_id']);
		$user = array_merge($user, $area, $account);
		
		for ($i = 0; $i < count($hero); $i++ ) {
			$where['hero_id'] = $hero[$i];
			$hero_detail[] = $heroMdl -> where($where) -> find();
		}
		
		$user['hero'] = $hero_detail;
		$user['hero_num'] = count($hero_detail);
		
		$mhModel = M('main_hero');
		$main_heros = $mhModel -> where("user_id=%d", $user_id) -> select();
		for ($i = 0; $i < count($main_heros); $i++ ) {
			$main_heros[$i] = $heroMdl -> find($main_heros[$i]['hero_id']);
		}
		
		$user['main_hero'] = $main_heros;
		return $user;
	}
	
	public function getUserDetailByAccount($account_id) {
		$users = $this -> where("account_id=%d", array($account_id)) -> select();
		
		for ($i = 0; $i < count($users); $i++ ) {
			$users[$i] = $this -> getUserDetailById($users[$i]['user_id']);
		}
		
		return $users;
		
	}
}