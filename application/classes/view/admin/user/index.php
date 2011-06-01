<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_User_Index extends View_Admin_Layout {

	public $title = 'Users';
	
	public $errors = array('Error1','Error2');

	public function users()
	{
		$users = ORM::factory('user')->find_all();
		return $users->as_array();
	}

	public function side_menu()
	{
		return Kohana::config('website.admin_users');
	}
}