<?php

class FileinclusionController extends \BaseController {


	public function __construct()
	{
		$this->beforeFilter('guest_check');
	}
	public function index()
	{
		if($filename = Input::get('name')) {
		$path = dirname(dirname(__FILE__)) . '/data/';
		$contents = File::get($path . $filename);
		return $contents;
		}
		else
		{
			return View::make('Vulnerabilities.fileinclusion');
		}
	}

}