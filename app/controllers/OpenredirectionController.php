<?php

class OpenredirectionController extends \BaseController {


	public function __construct()
	{
		$this->beforeFilter('guest_check');
	}
	/**
	 * @param $url
	 * @return mixed
     */
	public function openRedirect()
	{

		if($url = Input::get('url')) {
			return Response::make('Vulnerabilitites.redirection',302)->header( 'Location', $url );
		}
		else
		{
			return View::make('Vulnerabilities.redirection');
		}
	}

}