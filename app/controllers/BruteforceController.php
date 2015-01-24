<?php

class BruteforceController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('guest_bruteforce', ['except' => 'destroy']);
	}
	/**
	 * Display a listing of the resource.
	 * GET /bruteforce
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('vulnerabilities.bruteforce');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bruteforce/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bruteforce
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Auth::check()) {
			$formData = Input::only('username', 'password');

			//$this->SigninForm->validate($formData);

			if (!Auth::attempt($formData)) {
				Flash::error('Fail to login , please check your creditionals ');
				return Redirect::back()->withInput();
			}
			Flash::success('Welcome to password protected Area!');
			return Redirect::home();
		}
		else
		{
			return Redirect::home();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /bruteforce/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /bruteforce/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /bruteforce/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bruteforce/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}