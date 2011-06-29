<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Auth {


	/**
	* @var  boolean  auto render view
	**/
	public $auto_render = TRUE;

	/**
	* @var object the content View object
	*/
	public $view;

	public function before()
	{
		parent::before();
		if ($this->auto_render === TRUE)
		{
			// Set default title and content views (path only)
			$directory = $this->request->directory();
			$controller = $this->request->controller();
			$action = $this->request->action();

			// Removes leading slash if this is not a subdirectory controller
			$view_path = trim($directory.'/'.$controller.'/'.$action, '/');

			try
			{
				$this->view = Kostache::factory($view_path);
				if (Request::initial() !== Request::current() or  $this->request->is_ajax())
					$this->view->render_layout = FALSE;

			}
			catch (Kohana_Exception $x)
			{
				/*
				 * The View class could not be found, so the controller action is
				 * repsonsible for making sure this is resolved.
				 */
				 throw $x;
				//$this->view = NULL;
			}
		}
	}

	/**
	 * 
	 *
	 * @param   string   request method
	 * @return  void
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			// If content is NULL, then there is no View to render
			if ($this->view === NULL)
				throw new Kohana_View_Exception('There was no View created for this request.');
			$this->response->body($this->view);
		}
		parent::after();
	}

} // End website class
