<?php

use dvwa\Idor\IdorCommand;
use dvwa\BlogPosts\postsRepository;

class IdorController extends \BaseController {

	protected $postRepository;

	public function __construct(postsRepository $postsRepository)
	{
		$this->postsRepository = $postsRepository;
		$this->beforeFilter('guest_check');
	}

	/**
	 * Post Comment.
	 * @return mixed
     */
	public function store()
	{
		$body = Input::get('body');
		$userId = Input::get('userId');
		$this->execute(IdorCommand::class,[
			'body' => $body,
			'userId' => $userId,
		]);

		Flash::success('You Have Posted Comment');
		return Redirect::back();
	}

	/**
	 * Return Post
	 * @return mixed
     */
	public function index()
	{
		$posts = $this->postsRepository->getAllUsersPosts();
		return View::make('vulnerabilities.idor',compact('posts'));
	}

}