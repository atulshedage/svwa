<?php

use dvwa\users\UpdateUserCommand;
use \dvwa\users\profileRepository;
use dvwa\users\User;
class ProfileController extends \BaseController {

	public $profileRepository;

	public function __construct(profileRepository $profileRepository)
	{
		$this->profileRepository = $profileRepository;
		$this->beforeFilter('guest_check');
	}
	/**
	 * Display a listing of the resource.
	 * GET /profile
	 *
	 * @return Response
	 */
	public function index()
	{
		$userId = Auth::user()->id;
		$profiles = $this->profileRepository->getUserProfile($userId);
		return View::make('profile.index',compact('profiles'));
	}

	public function update()
	{
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$userId = Auth::user()->id;
		$this->execute(UpdateUserCommand::class,[
			'first_name' => $first_name,
			'last_name' => $last_name,
			'userId' => $userId,
		]);

		Flash::success('User Updated Successfully');

		return Redirect::back();
	}



}