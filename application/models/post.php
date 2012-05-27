<?php

class Post extends Eloquent {

	/**
	 * The name of the table associated with the model.
	 *
	 * @var string
	 */
	public static $table = 'posts';

	/**
	 * Establish the relationship between a post and a user
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Belongs_To
	 */
	public function user()
	{
		return $this->belongs_to('user');
	}

	/**
	 * Establish the relationship between a post and comments
	 *
	 * @return Laravel\Database\Eloquent\Relationships\Has_Many
	 */
	public function comments()
	{
		return $this->has_many('comment');
	}
}