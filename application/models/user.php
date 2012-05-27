<?php

class User extends Eloquent {

	/**
	 * The name of the table associated with the model.
	 *
	 * @var string
	 */
	public static $table = 'users';

	/**
	 * Automatically hash the password
	 *
	 * @return void
	 */
	public function set_password($password)
	{
		$this->set_attribute('password', Hash::make($password));
	}

	/**
	 * Establish the relationship between a user and posts
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Has_Many
	 */
	public function posts()
	{
		return $this->has_many('post');
	}

	/**
	 * Establish the relationship between a user and comments
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Has_Many
	 */
	public function comments()
	{
		return $this->has_many('comment');
	}
}