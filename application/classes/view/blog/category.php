<?php defined('SYSPATH') or die('No direct script access.');

class View_Blog_Category extends View_Layout {
	public $category;
	
	public function posts()
	{
		if($this->category)
		{
			$cat = ORM::factory('category', array('slug' => $this->category));
			$x = $cat->posts->find_all()->as_array();
		} 
		else
		{
			$x = ORM::factory('post')->find_all();
		}
		return $x;
	}

}