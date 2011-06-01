<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Website {

	/**
	* Authentication needed to watch page
	* @var  boolean
	*/
	public $auth_required = 'admin';
	

} // End class