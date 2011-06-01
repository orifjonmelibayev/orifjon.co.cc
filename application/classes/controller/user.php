<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Website {

	public function action_index()
	{
		$this->view = new View_Index();
//		$this->response->body($view);
	}
	/**
	* Login action. Shows loginform and handles auth when $_POST
	* data is available.
	*
	* @return  void
	*/
	public function action_login()
	{
		// Redirect user if already logged-in
		if (Auth::instance()->logged_in())
		{
			$this->request->redirect(Route::get('default')->uri()); //TODO: Change route to User setting page
		}

		if ($this->request->post())
		{
			if (Auth::instance()->login(
						$this->request->post('name'), 
						$this->request->post('password'),
						$this->request->post('remember')
				))
			{
				// Redirect to home
				$this->view->errors = array('logged in');
				//TODO: Change route to User setting page or admin dashboard
				$this->request->redirect(Route::get('default')->uri()); 
			}
			else
			{
				// Set authentication error
				$this->view->errors = array('not logged in');
			}
		}
			// Get validation errors
	}

	/**
	* Logout action
	*
	* @return  void
	*/
	public function action_logout()
	{
		// Logout user
		Auth::instance()->logout();

	// Redirect to login
		$this->request->redirect(Route::get('auth')->uri(array( 'action'=>'login')));
	}

} // End Welcome
