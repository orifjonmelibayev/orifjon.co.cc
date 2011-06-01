<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error extends Controller_Website {

	public function before()
	{
		parent::before();

		// Internal request only!
		if ( ! Request::current()->is_initial() )
		{
			if ($message = rawurldecode($this->request->param('message')))
			{
				// $this->view->message = $message;
			}
		}
		else
		{
			$this->request->action('404');
		}
		$action = $this->request->action();
		$this->response->status((int) $action);
		// $this->view->set('code',$action);
	}

	public function action_404(){}
	public function action_500(){}
} // End