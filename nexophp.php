<?php 

/**
 * 模块信息
 */
$module_info = [
	'version' => '1.0.2', 
	'title' => '测试模块',
	'description' => '这是一个测试模块', 
	'url' => '',
	'email' => '68103403@qq.com',
	'author' => 'sunkangchina'
];


add_action("header_center",function(){
	echo 'demo_module';
});


