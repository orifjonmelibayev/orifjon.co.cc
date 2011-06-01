<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Dashboard extends Controller_Admin {

	public function action_index()
	{
		$this->view->title = 'Dashboard';
	}

} // End Class
