<?php defined('SYSPATH') or die('No direct script access.');

class View_Post extends View_Layout {

	public $slg;

	public function post()
	{
		$x = ORM::factory('post')->where('slug','=',$this->slg)->find()->as_array();
		if ( ! $x['id']) throw new HTTP_Exception_404('Not found'); 
		return $x;
	}

}