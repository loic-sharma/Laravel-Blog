<?php

class Comment extends Eloquent {

	/**
	 * The name of the table associated with the model.
	 *
	 * @var string
	 */
	public static $table = 'comments';

	/**
	 * Establish the relationship between a comment and a user
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Belongs_To
	 */
	public function user()
	{
		return $this->belongs_to('user');
	}

	/**
	 * Establish the relationship between a comment and a post
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Belongs_To
	 */
	public function post()
	{
		return $this->belongs_to('post');
	}
}