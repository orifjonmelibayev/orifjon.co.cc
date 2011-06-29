<?php defined('SYSPATH') or die('No direct script access.');

class View_Layout extends Kostache_Layout
{
	public $title = 'Orifjon Meliboyev';
	public $logo_text = 'Orifjon Meliboyev';
	public $slogan = 'Do more than nothing, do something :)';
	public $sidebar;
	public $sidebar1;

	public $styles = array(
				array('file'=>'jquery.tweet.css','media' => 'screen'),
			);
	public $scripts =array(
				array('file'=>'jquery.js'),
				array('file'=>'jquery.tweet.js'),
			);


	public function main_menu()
	{
		return Kohana::config('website.main_menu');
	}

	public function base()
	{
		return URL::base('http');
	}
	
	public function profiler()
	{
		if (Kohana::$environment == Kohana::DEVELOPMENT)
    		return View::factory('profiler/stats');
	}
}
