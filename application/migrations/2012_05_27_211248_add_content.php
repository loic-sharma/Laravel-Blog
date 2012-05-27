<?php

class Add_Content {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		$user = new User;

		$user->username = 'admin';
		$user->password = 'password';

		$user->save();

		$post = new Post;

		$post->user_id = $user->id;
		$post->title   = 'Hello World!';
		$post->content = 'This is some random content';

		$post->save();
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
	}
}