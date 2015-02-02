<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /instruction
	 *
	 * @return Response
	 */
	public function instruction()
	{
		return View::make('Pages.instruction');
	}

	public function vulnerabilitites()
	{
		return View::make('pages.vulnerablities');
	}

	public function about()
	{
		return 'about page';
	}

	public function error_404()
	{
		return View::make('Pages.404');
	}
}