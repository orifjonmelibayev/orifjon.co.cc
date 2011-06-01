<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Website {

	public function action_index()
	{
		$this->view = new View_Index();
//		$this->view->scripts[] = array('file' => 'my.js');
//		$this->response->body($view);
	}

} // End Welcome
