<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View {

public function set_filename($file)
{
	$folder = Kohana::config('theme.path');
	$ext = pathinfo($file, PATHINFO_EXTENSION)?pathinfo($file, PATHINFO_EXTENSION):NULL;
	if($ext)
	{
		$file = substr($file, 0, -(strlen($ext) + 1));
	}
	if (($path = Kohana::find_file($folder, $file,$ext)) === FALSE)
	{
		if (($path = Kohana::find_file('views', $file,$ext)) === FALSE)
		{
			throw new Kohana_View_Exception('The requested layer :folder :file :ext could not be found', array(
				':folder' => $folder,
				':file' => $file,
				':ext' => $ext,
			));
		}
	}
 
	// Store the file path locally
	$this->_file = $path;
 
	return $this;
} //public function set_filename($file)

}
