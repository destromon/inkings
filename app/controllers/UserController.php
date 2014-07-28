<?php

class UserController extends BaseController {

	/*
	 * display default form
	 * 
	 * @param
	 * @return
	 */
	public function index()
	{
		return View::make('back.user')
			->with(array(
				'users' => User::all()));
	}

	public function createUser()
	{
		//do some create code here
	}

}
