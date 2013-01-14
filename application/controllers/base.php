<?php

class Base_Controller extends Controller {

	public $layout = 'layouts.default';

	public function __construct()
	{
		parent::__construct();

		/**
		 * Prepare navigation items
		 */
		$nav_items = array(
			array('title' => 'Home', 'url' => '/')
		);
		$this->layout->nest('nav', 'partials.nav', array('nav_items' => $nav_items));


		/**
		 * Define Assets
		 */
		// CSS
		Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');
		Asset::container('header')->add('bootstrap-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap');
		Asset::container('header')->add('main', 'css/main.css', array('bootstrap', 'bootstrap-responsive'));

		// Header JS
		Asset::container('header')->add('modernizr', 'js/vendor/modernizr.min.js');

		// Footer JS
		Asset::container('footer')->add('jquery', 'js/vendor/jquery.min.js');
		Asset::container('footer')->add('bootstrap', 'js/bootstrap.min.js');
		Asset::container('footer')->add('plugins', 'js/plugins.js');
		Asset::container('footer')->add('main', 'js/main.js', 'jquery');
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}
