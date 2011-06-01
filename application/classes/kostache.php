<?php defined('SYSPATH') or die('No direct script access.');

class Kostache extends Kohana_Kostache { 

	protected function _load($path)
	{
		$file = DOCROOT.'/'.Kohana::config('website.theme_path').'/'.$path.'.mustache';
		if ( ! file_exists($file) ) // fallback to default folder of KOstache
			$file = Kohana::find_file( 'templates', $path, 'mustache');

		if ( ! $file)
		{
			throw new Kohana_Exception('Template file does not exist: :path', array(
				':path' => Kohana::config('theme.path').'/'.$path,
			));
		}

		return file_get_contents($file);
	}

 }
