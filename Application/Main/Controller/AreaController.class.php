<?php
namespace Main\Controller;
use Think\Controller;
class AreaController extends Controller {
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'area');
	}
	
    public function index(){
        $this -> display();
    }
    
    public function add() {
		$this -> display('form');
	}
    
    public function dosave() {
		 if (!empty(I('post.'))){
            $areaMdl = M('area');
            $data = $areaMdl->create();
            
            if (empty(I('area_id'))) {
				$where['type'] = $data['type'];
				$where['area_no'] = $data['area_no'];
				if ($result = $areaMdl -> where($where) -> select()) {
					$this -> error('添加失败, 该区已存在');
				}
				$areaMdl -> add($data);
				$this -> success('添加成功', U('Area/showAll'));
			} else {
				$areaMdl -> save($data);
				$this -> success('修改成功', U('Area/showAll'));
			}
        } else {
            $this -> error('添加失败');
        }
	}
    public function dodel() {
		$area_id = I("area_id");
        $where["area_id"] = $area_id;
        
        // $accountMdl = M('account');
        // $result = $accountMdl -> where($where) -> delete(); 
		// $result = $result && D('user') -> deleteUserById($user_id);
		
		$result = D('user') -> deletUsers($area_id, 'area');
        if($result > 0){
            $this -> success('删除成功');
        }else{
            $this -> error('删除失败');
        }
	}
	public function showAll() {
		$areatMdl = M('area');
        // $where['type'] = 1;
        // $data_wx = $areatMdl-> order('area') -> where($where) -> select();
		// $where['type'] = 2;
        // $data_qq = $areatMdl-> order('area') -> where($where) -> select();
		
        // $this->assign( 'wx', $data_wx);
        // $this->assign( 'qq', $data_qq);
		
		$data = $areatMdl-> order('type, area_no') -> select();
		for ($i = 0; $i < count($data); $i++) {
			$data[$i]['user_count'] = M('user') -> where("area_id=%d", $data[$i]['area_id']) -> count();
		}
		$this->assign( '_list', $data);
        // echo "<pre>";
        // var_dump($data); die;
        $this -> display();
		
		// $this -> display();
	}
	
	public function edit() {
		$area_id = I('area_id');
		$data = M('area') -> find($area_id);
		$this -> assign('area', $data);
		$this -> display('form');
	}
	
	public function ajax_add() {
		// echo "<pre>";
		// var_dump($_POST);die;
		
		if (!empty(I('post.'))){
			$areaMdl = M('area');
			$data['type'] = I('type');
			$data['area_no'] = I('area_no');
			$data = $areaMdl->create($data);
				if ($result = $areaMdl -> where($data) -> select()) {
					$result['msg_sign'] = '400';
					$result['msg'] = '添加失败, 大区已存在';
					// $this -> error('添加失败, 账号已存在');
				}else {
					$areaMdl -> add($data);
				
					$result['msg_sign'] = '200';
					$result['msg'] = '添加成功';
				}
				
				
				// $this -> success('添加成功', U('Account/showAll'));

        } else {
			$result['msg_sign'] = '400';
			$result['msg'] = '添加失败111';
			// $this -> error('添加失败');
            
        }
		// echo "<pre>";
		// var_dump($result);die;
		// echo 123;die;
		$this->ajaxReturn ($result,'JSON');
	}
}