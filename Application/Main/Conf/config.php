<?php

return array(
	//'配置项'=>'配置值'
    //主题静态文件路径
    'TMPL_PARSE_STRING' => array(
        
        '__STATIC__' => __ROOT__.'/Public/Static',
        
    ),

    //Admin模块下的错误信息模板 模板必须存在,否则返回False,并默认走报错信息模板 ThinkPHP\Tpl\think_exception.tpl
//    'TMPL_EXCEPTION_FILE'=>'./Application/Admin/View/Error/404.html',

    'DENY_VISIT'=> array('BankTem/bankmap','BankTem/bank_level_json'),
    'LOAD_EXT_CONFIG'=> array('Hero'=>'Hero', 'hmu' => 'hmu'),
);