<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Post extends ORM {

	protected $_belongs_to = array(
		'category' => array(
			'model'   => 'category',
		),
	);
}