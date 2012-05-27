<?php

class User_Controller extends Base_Controller {

	/**
	 * Display the login form
	 *
	 * @return void
	 */
	public function get_login()
	{
		$this->layout->content = View::make('user.login');
	}

	/**
	 * Attempt to login
	 *
	 * @return Redirect
	 */
	public function post_login()
	{
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		);

		$validation = Validator::make($credentials, array(
			'username' => array('required'),
			'password' => array('required'),
		));

		if($validation->fails())
		{
			return Redirect::to('user/login')->with_errors($validation->errors);
		}

		if( ! Auth::attempt($credentials))
		{
			$errors = new Laravel\Messages('Invalid username and password combination.');

			return Redirect::to('user/login')->with_errors($errors);
		}

		return Redirect::home();
	}

	/**
	 * Log the user out
	 *
	 * @return Redirect
	 */
	public function get_logout()
	{
		Auth::logout();

		return Redirect::home();
	}
}