<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin {
	
	/*
	 * lists users
	 */
	public function action_index()
	{}

	public function action_edit()
	{
		$id = $this->request->param('id');
		$user = ORM::factory('user', $id);
		if($_POST)
		{
			$user->email = $this->request->post('email');
			$user->save();
		}
	}

}