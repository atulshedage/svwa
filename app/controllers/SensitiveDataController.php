<?php

class SensitiveDataController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('guest_check');
	}


	/**
	 * Clickjacking Vulnerability
	 * @return string
     */
	public function clickjack()
	{
		return View::make('Vulnerabilities.clickjacking');
	}


	/**
	 * Php Config Page
	 * @return string
     */
	public function config()
	{
		return View::make('vulnerabilities.phpconfig');
	}


}