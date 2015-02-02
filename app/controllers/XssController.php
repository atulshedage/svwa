<?php

use svwa\BlogPosts\PublishBlogPostCommand;
use svwa\BlogPosts\postsRepository;
use svwa\BlogPosts\BlogPost;

class XssController extends \BaseController {


	protected $postRepository;

	/**
	 * @param postsRepository $postsRepository
     */

	public function __construct(postsRepository $postsRepository)
	{
		$this->postsRepository = $postsRepository;
		$this->beforeFilter('guest_check');
	}

	/**
	 * Display a listing of the resource.
	 * GET /reflected-xss
	 *
	 * @return Response
	 */
	public function ReflectedXss()
	{
		$searchs = Input::only('search');
		return View::make('Vulnerabilities.reflected-xss',compact('searchs'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /Stored-Xss
	 *
	 * @return Response
	 */
	public function StoredIndex()
	{
		$posts = $this->postsRepository->getAllUsersPosts();
		return View::make('Vulnerabilities.stored-xss',compact('posts'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /Stored Xss
	 *
	 * @return Response
	 */
	public function StoredXss()
	{
		$body = Input::get('body');
		$userId = Auth::user()->id;
		$this->execute(PublishBlogPostCommand::class,[
			'body' => $body,
			'userId' => $userId,
		]);

		Flash::success('You Have Posted Comment');
		return Redirect::back();
	}

	/**
	 * Display a listing of the resource.
	 * GET /Browser Xss
	 *
	 * @return Response
	 */
	public function BrowserXssIndex()
	{
		return View::make('vulnerabilities.browserxss');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /Browser Xss
	 *
	 * @return Response
	 */
	public function BrowserXssStore()
	{
		$color = Input::only('color');
		return Redirect::route('browser_xss_path')->withInput($color);

	}

	public function delete($id)
	{

		$blogPost = BlogPost::find($id);
		if(Auth::user()->id == $blogPost->user_id) {
			$blogPost->delete();
			Flash::success('comment deleted');
			return Redirect::back();
		}
		else
		{
			return Redirect::home();
		}


	}


	/**
	 * CSRF Index
	 * @return mixed
     */
	public function CsrfIndex()
	{
		$posts = $this->postsRepository->getAllUsersPosts();
		return View::make('vulnerabilities.csrf',compact('posts'));
	}

	public function CsrfbypassIndex()
	{
		$posts = $this->postsRepository->getAllUsersPosts();
		return View::make('vulnerabilities.csrf-bypass',compact('posts'));
	}
}