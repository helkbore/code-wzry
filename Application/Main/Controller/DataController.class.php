<?php
namespace Main\Controller;
use Think\Controller;
class DataController extends Controller {
	public function __construct() {
		parent::__construct();
		// $menu_info = 'index';
		$this -> assign('menu', 'data');
	}
	
    public function index(){
        $this -> display();
    }
    
    public function add() {}
    public function showAll() {}
    public function dosave() {}
    public function del() {}
}