<?php

class Base_Controller extends Controller {

	/**
	 * Automatically turn on RESTful controllers
	 *
	 * @var bool
	 */
	public $restful = true;

	/**
	 * Set the default layout for the application
	 *
	 * @var string
	 */
	public $layout  = 'layout';

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