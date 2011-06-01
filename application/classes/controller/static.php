<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Website {

	/**
	* @TODO: option for disabling Markdown syntax
	*/
	public function action_index()
	{
		$page = $this->request->param('page');
		if( $page = Kohana::find_file('pages', $page, 'html') )
		{
			if ( ! class_exists('Markdown', FALSE))
			{
				// Load Markdown support
				require_once Kohana::find_file('vendor', 'markdown/markdown');
			}
			$marked_page = Markdown(file_get_contents($page)); 
			$view = new View_Static();
			$view->page = $marked_page;
			if (Request::initial() !== Request::current() or $this->request->is_ajax())
				{$view->render_layout = FALSE;}
		}
		else
		{
			throw new HTTP_Exception_404('File not Found');
		}
		$this->view = $view;
	}

} // End