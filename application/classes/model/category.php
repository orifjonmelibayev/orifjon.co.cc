<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Category extends ORM {

	protected $_has_many = array(
		'posts' => array(
			'model'   => 'post',
		),
	);

}