<?php

use dvwa\Forms\SigninForm as SigninForm;
use Laracasts\Validation\FormValidationException;

class SessionController extends \BaseController {

	protected $SigninForm;

	public function __construct(SigninForm $SigninForm)
	{
		$this->SigninForm = $SigninForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}
	/*
	 * Get Signin
	 * @return Response
	 */
	public function index()
	{
		return View::make('Signin.index');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /Signin
	 *
	 * @return Response
	 */
	public function store()
	{
		$formData = Input::only('username','password');

		//$this->SigninForm->validate($formData);

		if(!Auth::attempt($formData)) {
			Flash::error('Fail to login , please check your creditionals ');
			return Redirect::back()->withInput();
		}
		Flash::success('Welcome Back!');
		return Redirect::home()->withInput();
	}

	public function destroy()
	{
		if(Auth::check()) {
			Auth::logout();
			Flash::message('You have now been logged out.');
			return Redirect::home();
		}
		else
		{
			return Redirect::to('signin');
		}
	}

}