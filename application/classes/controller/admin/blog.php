<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Blog extends Controller_Admin {

	public function action_index()
	{
		$this->view->title = 'Blog';
	}

	/**
	* edit blog post
	* 
	* @return void
	* @author  Orifjon
	*/
	public function action_edit()
	{
		if($this->request->post())
		{
			$post = ORM::factory('post',$this->request->post('id'));
			$post->title = $this->request->post('title');
			$post->slug = $this->request->post('slug');
			$post->intro = $this->request->post('intro');
			$post->body = $this->request->post('body');
			//$post->title = Arr::get($_POST, 'title');
			//$post->title = Arr::get($_POST, 'title');
			$post->save();
		}
		
	}
}