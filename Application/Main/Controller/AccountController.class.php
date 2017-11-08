<?php
namespace Main\Controller;
use Think\Controller;
class AccountController extends Controller {
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'account');
	}
	
    public function index(){
        $this -> display();
    }
    
    public function add() {
        $this -> display('form');
    }
    public function showAll() {
        $accountMdl = M('account');
        
        $data = $accountMdl-> order('type, account') -> select();
		for ($i = 0; $i < count($data); $i++) {
			$data[$i]['user_count'] = M('user') -> where("account_id=%d", $data[$i]['account_id']) -> count();
		}
		
        
        $this->assign( '_list', $data);
        // echo "<pre>";
        // var_dump($data); die;
        $this -> display();
    }
    
    public function dosave() {
        if (!empty(I('post.'))){
			$accountMdl = M('account');
			$data = $accountMdl->create();
			if (empty(I('account_id'))) {
				if ($result = $accountMdl -> where($data) -> select()) {
					$this -> error('添加失败, 账号已存在');
				}
				$accountMdl -> add($data);
				
				$this -> success('添加成功', U('Account/showAll'));
			} else {
				$accountMdl ->save($data);
				$this -> success('修改成功', U('Account/showAll'));
			}

        } else {
            $this -> error('添加失败');
        }
        
    }
	
	public function ajax_add() {
		// echo "<pre>";
		// var_dump($_POST);die;
		
		if (!empty(I('post.'))){
			$accountMdl = M('account');
			$data['type'] = I('type');
			$data['account'] = I('account');
			$data = $accountMdl->create($data);
				if ($result = $accountMdl -> where($data) -> select()) {
					$result['msg_sign'] = '400';
					$result['msg'] = '添加失败, 账号已存在';
					// $this -> error('添加失败, 账号已存在');
				}else {
					$accountMdl -> add($data);
				
					$result['msg_sign'] = '200';
					$result['msg'] = '添加成功';
				}
				
				
				// $this -> success('添加成功', U('Account/showAll'));

        } else {
			$result['msg_sign'] = '400';
			$result['msg'] = '添加失败';
			// $this -> error('添加失败');
            
        }
		// echo "<pre>";
		// var_dump($result);die;
		// echo 123;die;
		$this->ajaxReturn ($result,'JSON');
	}
	public function addUser() {
		// $back_url = I('get.url');
		
		$account_result = M('account') -> field('type, account') -> find(I('get.account_id'));
		$type = $account_result['type'];
		
		
		$area = M('area') -> order('area_no') -> where(array('type' => $type)) -> select();
		
		// 读取所有英雄, 并转义分类
		$hero = M('hero') -> field('hero_id, hero_name, hero_type') -> order('hero_type')->select();
		$result = HeroController::hero_config_translator($hero);
		
		// 按英雄类别分类数据
		for ( $i = 0; $i < count($hero); $i++ ) {
			
			$sorts_hero_type[$hero[$i]['type_key']][] = $hero[$i];
			
		}
		
		// echo "<pre>";
		// var_dump($sorts_hero_type);
		
		$this -> assign('back_url', I('get.url'));
		$this -> assign('account_id', I('get.account_id'));
		$this -> assign('account', $account_result['account']);
		$this -> assign('areas', $area);
		$this ->assign('hero', $sorts_hero_type);
		$this -> display('User/addUser');
	}
	
	// ajax
    public function dodel() {
		// echo"<pre>";
		// var_dump(I("account_id"));die;
        $account_id = I("account_id");
        $where["account_id"] = $account_id;
        
        // $accountMdl = M('account');
        // $result = $accountMdl -> where($where) -> delete(); 
		// $result = $result && D('user') -> deleteUserById($user_id);
		
		$result = D('user') -> deletUsers($account_id, 'account');
		// echo $result;die;
        if($result > 0){
            $return['msg_sign'] = '200';
			$return['msg'] = '删除成功';
        }else{
            $return['msg_sign'] = '400';
			$return['msg'] = '删除失败';
        }
		
		$this->ajaxReturn ($return,'JSON');
    }
	
	public function showDetail() {
		$account_id = I("account_id");
		
		$account = M('account') -> find($account_id);
		$userMdl = D('user');
		$users = $userMdl -> getUserDetailByAccount($account_id);
		
		$account['user_num'] = count($users);
		// echo "<pre>";
		// var_dump($users);die;
		$this -> assign('users', $users);
		$this -> assign('account', $account);
		$this -> display();
	}
	
	public function edit() {
		$account_id = I('account_id');
		$data = M('account') -> find($account_id);
		$this -> assign('account', $data);
		$this -> display('form');
	}
}