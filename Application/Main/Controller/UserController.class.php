<?php
namespace Main\Controller;
use Think\Controller;
class UserController extends Controller {
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'user');
	}
	
    public function index(){
        $this -> display();
    }
    
    public function add() {
		// 获取所有大区
		$area = M('area') -> select();
		
		// 获取所有账号
		$account_wx = M('account') -> where('type=1') -> select();
		$account_qq = M('account') -> where('type=2') -> select();
		// 获取所有英雄
		$hero = M('hero') -> field('hero_id, hero_name, hero_type') -> order('hero_type')->select();
		$result = HeroController::hero_config_translator($hero);
		// 按英雄类别分类数据
		for ( $i = 0; $i < count($hero); $i++ ) {
			$sorts_hero_type[$hero[$i]['type_key']][] = $hero[$i];
			
		}
		
		$this -> assign('area', $area);
		$this -> assign('account_wx', $account_wx);
		$this -> assign('account_qq', $account_qq);
		$this -> assign('hero', $sorts_hero_type);
        $this -> display('form');
    }
	
    public function showAll() {
		$userMdl = D('user');
		$data = $userMdl -> order('account_id, area_id') -> select();
		for ($i = 0; $i < count($data); $i++) {
			$data[$i] = $userMdl -> getUserDetailById($data[$i]['user_id']);
		}
		
		$this->assign( '_list', $data);
        $this -> display();
	}
	
    public function dosave() {
		// echo "<pre>";
		// var_dump($_POST);die;
		$post = $userDao = I('post.');
		
		$userMdl = M('user');
		$userMdl -> startTrans();
		$userDao = $userMdl -> create($userDao);
		$userDao['hero'] = implode(', ', I('post.hero_id'));
		$userDao['last_time'] = time();
		
		$back_url = I('back_url');
		$back_url = strtr($back_url, '_', '/');
		// echo $back_url;die;
		if (empty(I('user_id'))) {
			$user_id = $userMdl -> add($userDao);
		} else {
			$userMdl -> save($userDao);
			$user_id = I('user_id');
		}
		
		
		if ( $user_id > 0 ) {
			$result = 1;
			$huMdl = M('user_hero');
			for( $i = 0; $i < count($post['hero_id']); $i++ ) {
				$u_hDao['user_id'] = $user_id;
				$u_hDao['hero_id'] = $post['hero_id'][$i];
				$u_hDao = $huMdl -> create($u_hDao);
				$result = $result && ($huMdl -> add($u_hDao));
			}
			
			if ($result) {
				$userMdl -> commit();
				// echo $back_url;die;
				// $this -> success('操作成功', U($back_url));
				// $this->redirect()
				
				// 维护user_hero表的hero_name字段
				$sql = "update wzry_user_hero as uh, wzry_hero as h set uh.hero_name = h.hero_name where uh.hero_id = h.hero_id and uh.hero_name is null";
				M() -> execute($sql);
				$this -> redirect($back_url);
			}
			
		} else {
			$userMdl->rollback();
			$this -> error('操作失败');
		}
	}
	
    public function dodel() {
		$result = D('user') -> deleteUserById(I('user_id'));
		if ($result > 0) {
			$this -> success('删除成功', U('User/showAll'));
		} else {
			$this -> error('删除失败');
		}
	}
	
	public function edit() {
		$user_id = I('user_id');
		
		$userMdl = D('user');
		$userData = $userMdl -> getUserDetailById($user_id);
		
		// 页面复选框默认勾选已拥有的英雄
		for ($i = 0; $i < count($userData['hero']); $i++) {
			$hero_selected[] = $userData['hero'][$i]['hero_id'];
		}
		
		$this -> assign('user', $userData);
		$this -> assign('hero_selected', json_encode($hero_selected));
		
		$this -> add();
	}
	
	public function setMain() {
		$user_id = I('user_id');
		$userMdl = D('user');
		$userData = $userMdl -> getUserDetailById($user_id);
		
		$this -> assign('user', $userData);
		$this -> display();
	}
	
	public function saveSetMain () {
		$user_id = I('user_id');
		$heros = I('main_hero');
		$mhModel = M('main_hero');
		
		$mhModel -> startTrans();
		$mhDao['user_id'] = $user_id;
		// 去重, 删除已有的关联, 重新插入
		if ($mhModel -> where("user_id=%d", $user_id) -> delete() === false) {
			$this -> error('操作失败');
		}
		$result = true;
		for ( $i = 0; $i < count($heros); $i++ ) {
			$mhDao['hero_id'] = $heros[$i];
			$result = $result && $mhModel -> add($mhDao);
		}
		
		if ($result) {
			$mhModel -> commit();
			$this -> success('操作成功', U('User/showAll'));
		} else {
			$mhModel -> rollback();
			$this -> error('操作失败');
		}
		
	}
}