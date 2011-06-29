<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Website {

	/**
	* Shows individual blog post.
	*/
	public function action_index()
	{
		$slug = $this->request->param('slug');
		$view = new View_Post();
		$view->slg=$slug;
		$this->view = $view;
	}
	
	/**
	* Shows list of articles in category
	*/
	public function action_category()
	{
		$this->view->category = $this->request->param('category');
	}
	

} // End blog