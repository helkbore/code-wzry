<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'         => 'Main',
    'TMPL_CACHE_ON'          => false,//禁止模板编译缓存
    'HTML_CACHE_ON'          => false,//禁止静态缓存
    'URL_CASE_INSENSITIVE'   => true, //true表示不区分大小写
    'URL_MODEL'              => 3, //URL模式
    'VAR_URL_PARAMS'         => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'      => '/', //PATHINFO URL分割符
    
    //网站名称
    'APP_TITLE'         => 'WZRY助手',
    
    'LOAD_EXT_CONFIG'=> array('DB'),
);