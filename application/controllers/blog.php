<?php

class Blog_Controller extends Base_Controller {

	/**
	 * Display all of the blog posts
	 *
	 * @return void
	 */
	public function get_posts()
	{
		$posts = Post::with('comments')->get();

		$this->layout->content = View::make('blog.index')->with('posts', $posts);
	}

	/**
	 * Display a specific blog post
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_post($id)
	{
		$post = Post::with(array('comments', 'comments.user'))->find($id);

		if(is_null($post))
		{
			return Redirect::home();
		}

		$this->layout->content = View::make('blog.post')->with('post', $post);
	}

	/**
	 * Add a comment to a specific blog post
	 *
	 * @param  int       $post_id
	 * @return Redirect
	 */
	public function post_post($post_id)
	{
		$post = Post::find($post_id);

		if(is_null($post))
		{
			return Redirect::home();
		}

		$validation = Validator::make(Input::all(), array(
			'comment' => 'required',
		));

		if($validation->fails())
		{
			return Redirect::to('blog/post/' . $post_id)->with_errors($validation->errors);
		}

		$comment = new Comment;

		$comment->user_id = Auth::user()->id;
		$comment->post_id = $post_id;
		$comment->content = Input::get('comment');

		$comment->save();

		return Redirect::to('blog/post/' . $post_id);
	}
}