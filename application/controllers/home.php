<?php

class Home_Controller extends Base_Controller {

	public function action_index()
	{
		if ( ! Auth::check())
		{
			return Redirect::to('auth/login');
		}

		$this->layout->title = 'Home';
		$this->layout->nest('content', 'home.index');
	}
}
