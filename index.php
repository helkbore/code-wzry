<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');



// custom -s 调试工具 @郭嘉婧
function filetest_array($arr, $fn = 'test'){
    //$str .= serialize($arr)."\n";
    $str = var_export($arr, true) . ";\n";
    $filename = "d:/mytest/$fn".".txt";
    $data = date('Y-m-d H:i:s');

    file_put_contents($filename, '---------------------------------'.$data."---------------------------\r\n", FILE_APPEND);
    file_put_contents($filename,$str, FILE_APPEND);
    file_put_contents($filename, "------------------------------------------------------------------------------\r\n", FILE_APPEND);
}

function filetest_string($str, $fn = 'teststring'){
    //$str = serialize($arr);
    $str = $str."\n";
    $filename = "d:/mytest/$fn".".txt";
    file_put_contents($filename,$str, FILE_APPEND);
}
function filetest_json($arr, $fn = 'testArray'){
    $filename = "d:/mytest/$fn".".txt";
    $str = json_encode($arr)."\n";
    file_put_contents($filename, $str, FILE_APPEND);
}

function br() {
    echo "<br />";
}
function dt($obj){
    echo "<pre>";
    var_dump($obj);
}
function dtd($obj){
    echo "<pre>";
    var_dump($obj);
    die;
}
// custom -e


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单