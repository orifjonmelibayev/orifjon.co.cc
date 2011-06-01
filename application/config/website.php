<?php defined('SYSPATH') or die('No direct script access.');


return array(
	'main_menu' =>array( 
		array('link' => './', 'text'=>'Home','current' => 'id=current','desc'=>'Start here'),
		array('link' => 'about.html', 'text'=>'About','desc'=>'Who am I'),
		array('link' => '#', 'text'=>'Contact','desc'=>'Find me'),
	),
	'admin_top_menu' =>array( 
		array('link' => 'admin', 'text'=>'Dashboard','active' => 'id=menu-active','desc'=>'Dashboard'),
		array('link' => 'admin/user', 'text'=>'Users','desc'=>'Who am I'),
		array('link' => '#', 'text'=>'Contact','desc'=>'Find me'),
		array('link' => 'guide', 'text'=>'Userguide','desc'=>"O'qi va O'rgan"),
	),
	'admin_dashboard' =>array( 
		array('link' => '#', 'text'=>'Home','active' => 'id=submenu-active','desc'=>'Start here'),
		array('link' => '#', 'text'=>'About','desc'=>'Who am I'),
		array('link' => '#', 'text'=>'Contact','desc'=>'Find me'),
		array('link' => 'guide', 'text'=>'Userguide','desc'=>"O'qi va O'rgan"),
	),
	'admin_users' =>array( 
		array('link' => 'admin/user', 'text'=>'List Users','active' => 'id=submenu-active','desc'=>'Start here'),
		array('link' => 'admin/user/add', 'text'=>'Add Users','desc'=>'Who am I'),
	),

	'theme_path' => 'themes/mint',
	'plugins' => array(), // TODO: move this to seperate file
);
