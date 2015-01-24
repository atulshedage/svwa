<?php

use dvwa\Signup\SignUpCommand;

class SignUpController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('guest');
	}
	/**
	 * Display a listing of the resource.
	 * GET /signup
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('Signup.index');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /signup
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->execute(SignUpCommand::class);
		Flash::success('Registration Complete');
		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /signup/{id}
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
	 * GET /signup/{id}/edit
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
	 * PUT /signup/{id}
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
	 * DELETE /signup/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}