<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Dashboard_Index extends View_Admin_Layout {
	public $error;

	public function side_menu()
	{
		return Kohana::config('website.admin_dashboard');
	}


}