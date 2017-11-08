<?php
namespace Main\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'index');
	}
    public function index(){
		$sql = "select * from wzry_update";
		$updateUser = M() -> query($sql);
		
		// 显示金币前10名
		$sql = "select * from userview where type = 1 order by money DESC limit 10";
		$wxMoneyList = M() -> query($sql);
		$sql = "select * from userview where type = 2 order by money DESC limit 10";
		$qqMoneyList = M() -> query($sql);
		
		// 未设置主玩的user
		$sql = "select *, GROUP_CONCAT(hero_name) as having_hero from uhview where user_id not in (select user_id from wzry_main_hero) group by user_id";
		$unownUser = M() -> query($sql);
		
		// 未拥有的hero
		$unownHero = D('hero') -> getUnownHero();
		
		// 前10钻
		$sql = "select * from userview where type=1 order by diamond desc limit 10";
		$wxDiamondList = M() -> query($sql);
		
		$sql = "select * from userview where type=2 order by diamond desc limit 10";
		$qqDiamondList = M() -> query($sql);
		
		// 前10等级
		$sql = "select * from userview where type=1 order by level desc limit 10";
		$wxLevelList = M() -> query($sql);
		
		$sql = "select * from userview where type=2 order by level desc limit 10";
		$qqLevelList = M() -> query($sql);
		
		
		
		// 获取英雄数前10的角色
		$sql = "select *, count(*) as hcount from uhview GROUP BY user_id order by count(*) desc limit 10";
		$heroList = M() -> query($sql);
		
		// 维护user_hero表的hero_name字段
		$sql = "update wzry_user_hero as uh, wzry_hero as h set uh.hero_name = h.hero_name where uh.hero_id = h.hero_id and uh.hero_name is null";
		M() -> execute($sql);
		
		// 获取铭文前10
		$sql = "select * from userview order by mingwen desc limit 10";
		$mingwenList = M() -> query($sql);
		
		// 获取总场数前10
		$sql = "select * from userview order by changshu desc limit 10";
		$changshuList = M() -> query($sql);
		
		// 每个账号里等级最高的号
		$sql = "select * from userview as a where `level` = (select max(`level`) from userview where account_id = a.account_id) ";
		$maxLevelUser = M() -> query($sql);
		
		// 等级最低排行
		$sql = "select * from userview order by level limit 10";
		$levelLowList = M() -> query($sql);

		// 铭文最低排行
		$sql = "select * from userview order by mingwen limit 10";
		$mignwenLowList = M() -> query($sql);
		
		// 账号角色数排行
		$sql = "select count(*)  as user_count, account_id, account from userview group by account_id order by count(*) desc";
		$userCount = M() -> query($sql);
		
		
		
		
		
		// 购买英雄参考
		// 13888
		$sql = "select * from userview  as a left join (select count(*) as hcount, user_id from wzry_user_hero group by user_id order by count(*)) as b on  a.user_id = b.user_id where (money <= 13888 and money >= 12000) or ( money >= 13888 and money <=15000) order by b.hcount";
		$buyHero = M() -> query($sql);
		if (count() < 1) { $buyHero13888 = "赞无参考, 参见金币排行";};
		// 18888
		$sql = "select * from userview  as a left join (select count(*) as hcount, user_id from wzry_user_hero group by user_id order by count(*)) as b on  a.user_id = b.user_id where money >= 15000 order by b.hcount ";
		$buyHeroEight = M() -> query($sql);
		
		// 英雄主玩
		$sql = "select * from mhview order by user_id";
		$mainHeroList = M() -> query($sql);
		
		// 每个英雄场次最高的角色账号
		$sql = "select * from userview as a , (select max(cc) as cc, hero_name, user_id, hero_id from wzry_user_hero group by hero_id) as b where a.user_id = b.user_id";
		$ccHeroUser = M() -> query($sql);
		
		// 英雄角色数
		$sql = "select hero_name, count(*) as count from uhview GROUP BY hero_id ";
		$heroUserNum =  M() -> query($sql);
		
		// echo "<pre>";
		// var_dump($unownUser);die;
		$this -> assign('update_hero', $updateUser);
		$this -> assign('wx_money_list', $wxMoneyList);
		$this -> assign('qq_money_list', $qqMoneyList);
		$this -> assign('unown_user', $unownUser);
		$this -> assign('unown_hero', $unownHero);
		$this -> assign('wx_diamond_list', $wxDiamondList);
		$this -> assign('qq_diamond_list', $qqDiamondList);
		$this -> assign('wx_level_list', $wxLevelList);
		$this -> assign('qq_level_list', $qqLevelList);
		$this -> assign('hero_list', $heroList);
		$this -> assign('mingwen_list', $mingwenList);
		$this -> assign('changshu_list', $changshuList);
		$this -> assign('max_level_user', $maxLevelUser);
		$this -> assign('user_count', $userCount);
		$this -> assign('cc_hero_user', $ccHeroUser);
		$this -> assign('level_low_list', $levelLowList);
		$this -> assign('mingwen_low_list', $mignwenLowList);
		$this -> assign('buy_hero', $buyHero);
		$this -> assign('buy_hero_eight', $buyHeroEight);
		$this -> assign('main_hero_list', $mainHeroList);
		$this -> assign('hero_user_num', $heroUserNum);
	    $this -> display();
    }
	
	public function saveUpuser () {
		if ( !empty(I('post.')) ){
			$updateMdl = M('update');
			$data = $updateMdl->create();
			$data['last_time'] = time();
			$updateMdl -> add($data);
			$this -> redirect();
		}
	}
	
	public function delUpuser() {
		
		$update_id = I('update_id');
		$result = M('update') -> where("update_id = %d", $update_id) -> delete();
		if ($result) {
			$this -> success('操作成功');
		} else {
			$this -> error('操作失败');
		}
	}
}