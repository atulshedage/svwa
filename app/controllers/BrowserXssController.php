<?php

class BrowserXssController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /browserxss
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('vulnerabilities.browserxss');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /browserxss
	 *
	 * @return Response
	 */
	public function store()
	{
		$color = Input::only('color');
		return Redirect::route('browser_xss_path')->withInput($color);

	}
//
//	public function show($colorss)
//	{
//		return $colorss;
//	}
}