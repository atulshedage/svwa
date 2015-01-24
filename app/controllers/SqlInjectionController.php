<?php

class SqlInjectionController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('guest_check');
	}
	/**
	 * Display a listing of the resource.
	 * GET /sqlinjection
	 *
	 * @return Response
	 */
	public function index()
	{
		$id = Input::get('id');

		$query = 'SELECT * FROM `users`';
		$query .= "WHERE id ='".$id."'";

		$users = DB::Connection('mysql')->select($query);
		return View::make('vulnerabilities.sqlinjection')->withUsers($users);
	}

	/*
	 * Login Bypass
	 */

	public function loginBypass()
	{
		$username = Input::get('username');

		$password = Input::get('password');
		$query = 'SELECT * FROM `users`';
		$query .= "WHERE username ='".$username."'";
		$query .= "AND password='".$password."'";

		$users = DB::Connection('mysql')->select($query);

		if($users)
		{
			Flash::success('Successfully Logged In Through SQL Injection!');
			return Redirect::to('/')->withInput();
		}
		else
		{
			Flash::error('Fail to login , please check your creditionals ');
			return Redirect::back()->withInput();
		}
	}

	public function loginBypassGet()
	{
		return View::make('vulnerabilities.loginbypass');
	}
}