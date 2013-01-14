<?php

class Auth_Controller extends Base_Controller {

	public $restful = true;

	public function get_login()
	{
		if (Auth::check())
		{
			return Redirect::to('/');
		}
		
		$this->layout->title = 'Login';
		$this->layout->nest('content', 'auth.login');
	}

	public function post_login()
	{
		if (Input::has('email') and Input::has('password'))
		{
			$credentials = array('username' => Input::get('email'), 'password' => Input::get('password'));
			if (Auth::attempt($credentials))
			{
				// come on in
				return Redirect::to('/');
			}
			else {
				// Sorry dude
				Session::flash('status', 'Wrong credentials!');
			}
		}
		else {
			// forgeting something?
			Session::flash('status', 'Please fill in all fields!');
		}
		

		$this->layout->title = 'Login';
		$this->layout->nest('content', 'auth.login');
	}

	public function get_logout()
	{
		Auth::logout();
		return Redirect::to('auth/login');
	}
}
