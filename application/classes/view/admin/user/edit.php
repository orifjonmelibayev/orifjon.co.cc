<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_User_Edit extends View_Admin_Layout {

	public function users()
	{
		$users = ORM::factory('user')->find_all();
		return $users->as_array();
	}
}