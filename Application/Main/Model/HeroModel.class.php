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

class HeroModel extends Model {

   public function deleteHeroById($hero_id) {
	   $this -> startTrans();
	   
	   // 删除hero表
	   $result_1 = $this -> where("hero_id=%d", $hero_id) -> delete();
	   // 删除 user_hero 表
	   $result_2 = M('user_hero') -> where("hero_id=%d", $hero_id) -> delete();
	   // 删除 main_hero 表
	   $result_3 = M('main_hero') -> where("hero_id=%d", $hero_id) -> delete();
	   
	   if ( $result_1 === false || $result_2 === false || $result_3 === false ) {
		   $this -> rollback();
		   return false;
	   } else {
		   $this -> commit();
		   return true;
	   }
	   
	   
   }
   
	// 清空temp_hmu表
	// 设置temp_hmu表默认数据(默认四个hero)
   public function reset_hmu() {
	   $config = C('hmu');
	   $hmuMdl = M('temp_hmu');
	   $hmuMdl -> where('1=1') -> delete();
	   
	   for ($i = 0; $i < count($config); $i++ ) {
		   $dao['user_id'] = 0;
		   $dao['hero_id'] = $config[$i];
		   $hmuMdl -> add($dao);
	   }
   }
   
   // 该hero只有一个user有的情况 该user只有一个hero的情况
   public function getOneAutoMain() {
		$sql = "select * from wzry_user_hero where hero_id not in (select hero_id from wzry_temp_hmu) group by hero_id having count(*) < 2 LIMIT 1";
	    
	    
	    $result = M() -> query($sql);
	    
	   if (empty($result)) {
		   $sql = "select * from wzry_user_hero where hero_id not in (select hero_id from wzry_temp_hmu) group by user_id having count(*) < 2 LIMIT 1";
			$result = M() -> query($sql);
	   }
	   return $result[0];
   }
   
   
   public function saveMainAutoTemp() {
	   $hmuMdl = M('temp_hmu');
	   // 查询一条除hmu表外只拥有1个hero的user
		$temp_hmu = $this -> getOneAutoMain();
		// 设置temp_hmu表默认数据(默认四个hero)
		if (!empty($temp_hmu)) {
			$data = $hmuMdl -> create($temp_hmu);
			$hmuMdl -> add($data);
			$this -> saveMainAutoTemp();
		} else {
			return true;
		}
   }
   
   // 未匹配main的英雄
   public function getNoAutoHero() {
	   $sql = "select * from wzry_hero where hero_id not in (select hero_id from wzry_temp_hmu union select hero_id from wzry_hero where hero_id not in (select hero_id from wzry_user_hero))";
	   $result = M() -> query($sql);
	   return $result;
   }
   
   // 为纯user_hero表数据扩展信息(如对应user_id, hero_id的详细信息)
   public function uhExtends($data) {
	   // echo "<pre>";
	   // print_r($data[0]);die;
	   for ( $i = 0; $i < count($data); $i++ ) {
			$sql = "select * from uhview where user_id = " . $data[$i]['user_id'] . "  and  hero_id = " . $data[$i]['hero_id'];
			// echo $sql;die;
			$result = M() -> query($sql);
			// echo "<pre>";
			// print_r($result);die;
			$data[$i] = $result[0];
	   }
	   
	   return $data;
   }
   
   // 获取未拥有的hero
   public function getUnownHero() {
	   $sql = "select * from wzry_hero where hero_id not in (select hero_id from wzry_user_hero)";
	   $result = M() -> query($sql);
	   return $result;
   }
   
   // 获取自动匹配时未匹配到的user
   public function getUnownUser() {
	   $sql = "select *,  GROUP_CONCAT(hero_name) as having_hero from uhview where user_id not in (select user_id from wzry_temp_hmu group by user_id) GROUP BY user_id ;";
	   $result = M() -> query($sql);
	   return $result;
   }
  
}