<?php defined('SYSPATH') or die('No direct script access.');

class View_Blog_Category extends View_Layout {
	public $category;
	
	public function posts()
	{
		$cat = ORM::factory('category', array('slug' => $this->category));
		$this->category = $cat->title;
		$x = $cat->posts->find_all()->as_array();
		return $x;
	}

}