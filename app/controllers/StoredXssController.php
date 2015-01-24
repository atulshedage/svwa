<?php
use dvwa\BlogPosts\PublishBlogPostCommand;
use dvwa\BlogPosts\postsRepository;
class StoredXssController extends \BaseController {

	protected $postRepository;

	public function __construct(postsRepository $postsRepository)
	{
		$this->postsRepository = $postsRepository;
	}
	/**
	 * Display a listing of the resource.
	 * GET /stored-xss
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->postsRepository->getAllUsersPosts();
		return View::make('Vulnerabilities.stored-xss',compact('posts'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /storedxss
	 *
	 * @return Response
	 */
	public function store()
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

}