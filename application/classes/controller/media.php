<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Media extends Controller {
	
	protected $theme_path = 'themes/default';

	public function before()
	{
		$this->theme_path = Kohana::config('website.theme_path');
	}

	public function action_test()
	{
		$file = $this->request->param('file');
		$dir = $this->request->param('dir');
		$this->response->body($this->theme_path."<br/>".$dir."<br/>".$file);
	}

	public function action_media()
	{
		// Get the file path from the request
		$file = $this->request->param('file');
		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		$admin = $this->request->param('admin');
		$admin_path = isset($admin)?$admin.'/':'';

		$dir = DOCROOT.'/'.$this->theme_path.'/'.$admin_path.$this->request->param('dir').'/'.$file;
		if (file_exists($dir))
		{
			$file = $dir;
		}
		else // search it
		{
			// Remove the extension from the filename
			$file = substr($file, 0, -(strlen($ext) + 1));
			if ( ! $file = Kohana::find_file($admin_path.$this->request->param('dir'), $file, $ext))
			{
			// Return a 404 status
				throw new HTTP_Exeption_404('Not found');//return $this->response->status(404);
			}
		}
			// Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
		$this->response->check_cache(sha1($this->request->uri()).filemtime($file), $this->request);

		// Send the file content as the response
		$this->response->body(file_get_contents($file));
		// Set the proper headers to allow caching
		$this->response->headers('content-type',  File::mime_by_ext($ext));
		$this->response->headers('last-modified', date('r', filemtime($file)));
	}

}
