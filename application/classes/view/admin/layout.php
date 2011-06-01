<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Layout extends Kostache_Layout
{
	protected $_layout = 'admin/layout';
	public $title = 'Admin Area';
	public $logo_text = 'Orifjon Meliboyev';
	public $slogan = 'Do more than nothing, do something :)';
	public $sidebar;
	public $sidebar1;
	public $errors;

	public $styles = array(
				array('file'=>'jquery.tweet.css','media' => 'screen'),
			);
	public $scripts =array(
				array('file'=>'jquery.js'),
				array('file'=>'jquery.tweet.js'),
			);


	public function admin_top_menu()
	{
		return Kohana::config('website.admin_top_menu');
	}

	public function base()
	{
		return URL::base('http');
	}

	public function has_side_menu()
	{
		return method_exists($this,'side_menu');
	}
}