<?php
namespace Main\Controller;
use Think\Controller;
class HeroController extends Controller {
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'hero');
	}
	
    public function index(){
        $this -> display();
    }
    
    public function add() {
		$this -> assign('hero_type', C('Hero'));
        $this -> display('form');
    }
	
	// 英雄场次统计
	public function showCc() {
		$sql = "select sum(cc), hero_id, hero_name from wzry_user_hero group by hero_id order by sum(cc) desc";
		$heroList = M() -> query($sql);
		
		$this -> assign('hero_list',$heroList);
        $this -> display();
	}
    public function showAll() {
		$hero_type_config = C('Hero');
		$uhModel = M('user_hero');
		$data = M('hero') -> order('hero_type, money') -> select();
		
		for ( $i = 0; $i <count($data); $i++ ) {
			$is_haveDto = $uhModel -> where("hero_id=%d", $data[$i]['hero_id']) -> select();
			if (count($is_haveDto) > 0) {
				$data[$i]['is_have'] = 1;
				$data[$i]['hero_nums'] = count($is_haveDto);
			} else {
				$data[$i]['is_have'] = 0;
				$data[$i]['hero_nums'] = 0;
			}
			
		}
		
		$this -> hero_config_translator($data);
		$this -> ishave_translator($data);
		
		$this->assign( '_list', $data);
        $this -> display();
	}
    public function dosave() {
		if ( !empty(I('post.')) ){
            $heroMdl = M('hero');
            $data = $heroMdl->create();

			// 编辑
			if (I('hero_id')) {
				$result = $heroMdl -> save($data);
				if ($result === false) {
					$this -> error('操作失败');
				} else {
					$this -> success('操作成功', U('Hero/showAll'));
				}
			} else {
				// 添加一条
				$where['hero_name'] = $data['hero_name'];
				if ($result = $heroMdl -> where($where) -> select()) {
					$this -> error('添加失败, 该英雄已存在');
				}
				
				$result = $heroMdl -> add($data);
				if ($result) {
					$this -> success('添加成功', U('Hero/showAll'));
				} else {
					$this -> error('操作失败');
				}
			}
        } else {
            $this -> error('添加失败');
        }
	}
    public function dodel() {
		if ( $result = D('hero') -> deleteHeroById(I('hero_id')) ) {
			 $this -> success('操作成功', U('Hero/showAll'));
		} else {
			$this -> error('操作失败');
		}
	}
	
	
	public static function hero_config_translator(&$data) {
		$config = C('Hero');
		for ($i = 0; $i <count($data); $i++) {
			$data[$i]['type_key'] = $data[$i]['hero_type'];
			$data[$i]['hero_type'] = $config[$data[$i]['hero_type']];
		}
		return $data;
	}
	public static function ishave_translator(&$data) {
		for ($i = 0; $i < count($data); $i++) {
			if ($data[$i]['is_have'] == 1) {
				$data[$i]['is_have'] = '是';
			} else {
				$data[$i]['is_have'] = '否';
			}
		}
		
		return $data;
		
	}
	
	public function heroData() {
		$hero = D('hero') -> getAllHeroData();
	}
	
	public function showDetail() {
		$uhDto = M('user_hero') -> where("hero_id=%d", I('hero_id')) -> select();
		$userMdl = D('user');
		
		for ($i = 0; $i < count($uhDto); $i++) {
			$userData[] = $userMdl -> getUserDetailById($uhDto[$i]['user_id']);
		}
		
		// echo "<pre>";
		// var_dump($userData);die;
		
		$mhDto = M('main_hero') -> where("hero_id=%d", I('hero_id')) -> select();
		for ($i = 0; $i < count($mhDto); $i++) {
			$main_hero[] = $userMdl -> getUserDetailById($mhDto[$i]['user_id']);
		}
		
		$heros = M('hero') -> find(I('hero_id'));
		$heros['user_num'] = count($uhDto);
		$heros['main_num'] = count($mhDto);
		
		$config = C('Hero');
		$heros['hero_type'] = $config[$heros['hero_type']];
		
		$this -> assign('users', $userData);
		$this -> assign('hero_info', $heros);
		$this -> assign('main_heros', $main_hero);
		$this -> display();
	}
	
	public function showConfigMain() {
		$heroMdl = D('hero');
		$heroMdl -> reset_hmu();	// 清空temp_hmu表
		$hmuMdl = M('temp_hmu');
		$uhMdl = M('user_hero');
		
		$heroMdl -> saveMainAutoTemp();
		

		// 返回temp_hmu表
		$autoMatchUh = $hmuMdl -> where("user_id <> 0")-> select();
		// 根据id多表关联获取详情
		$autoMatchUh = $heroMdl -> uhExtends($autoMatchUh);
		// echo "<pre>";
		// var_dump($autoMatchUh);die;
		
		// 获取额外的没有自动匹配的英雄
		$result = $heroMdl -> getNoAutoHero();	//获取英雄
		// echo "<pre>";
		// var_dump($result);die;
		$noAutoUh = array();
		if (!empty($result)) {
			for ( $i = 0; $i < count($result); $i++ ) {
				unset($temp);
				$where['hero_id'] = $result[$i]["hero_id"];// die;
				$heroDto = $uhMdl -> where($where) -> select();
				
				
				// 根据id多表关联获取详情
				$heroDto = $heroMdl -> uhExtends($heroDto);
				for ( $j= 0; $j < count($heroDto); $j++ ) {
					$temp['hero_id'] = $heroDto[0]['hero_id'];
					$temp['hero_name'] = $heroDto[0]['hero_name'];
					$temp['having_users'][$j] = $heroDto[$j];
					$noAutoUh[$i] = $temp;
					
				}
				// $noAutoUh = array_merge($noAutoUh, $heroDto);
			}
			
			
			// echo "<pre>";
			// var_dump($noAutoUh);die;
			// $dataDto = array_merge($autoMatchUh, $noAutoUh);
			// var_dump($dataDto);
		}
		
		// 获取未拥有的hero
		$unownHero = $heroMdl -> getUnownHero();
		if (!empty($unownHero)) {
			$this -> assign('unown_hero', $unownHero);
			// $heroDto = $heroMdl -> uhExtends($heroDto);
			// echo "<pre>";
			// var_dump($unownHero);die;
		}
		
		// 获取自动匹配时未匹配到的user
		$unownUser = $heroMdl -> getUnownUser();
		if ( !empty($unownHero) ) {
			$this -> assign('unown_user', $unownUser);
		}
		// 删除temp_hmu表
		$heroMdl -> reset_hmu();
		// echo "<pre>";
		// var_dump($noAutoUh);die;
		$this -> assign('auto_match', $autoMatchUh);
		$this -> assign('no_auto', $noAutoUh);
		$this -> display();
	}
	
	public function edit() {
		$hero_id = I('hero_id');
		$hero = M('hero') -> find($hero_id);
		
		$config = C('Hero');
		$hero['type_key'] = $hero['hero_type'];
		$hero['hero_type'] = $config[$hero['hero_type']];
		
		$this -> assign('hero', $hero);
		$this -> add();
	}
	
	// 保存自动匹配的结果
	public function saveAutoMatch() {
		
		$post = I('post.');
		$mhMdl = M('main_hero');
		// echo "<pre>";
		// var_dump($post);
		for ($i = 0; $i < count($post['user_id']); $i++ ) {
			$dao['user_id'] = $post['user_id'][$i];
			$dao['hero_id'] = $post['hero_id'][$i];
			$result = $mhMdl -> add($dao);
			// var_dump($post[$i]);
		}
		$this -> success('操作成功');
	}

}