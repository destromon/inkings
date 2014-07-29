<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()) {
			return Redirect::to('user');
		}

		return View::make('login.index');
	}


	/** 
	 *	process login
	 *
	 * @param
	 * @return Response
	 */
	public function doLogin()
	{
		//validate inputted data 
		$rules = array(
			'user_email'    => 'required|email',
			'user_password' => 'required|alphaNum'
		);

		$validator = Validator::make(Input::all(), $rules);

		//check if inputted data is correct
		if($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('user_password'));
		} else {

			// create our user data for the authentication
			$userData = array(
				'user_email' 	=> Input::get('user_email'),
				'user_password' => Input::get('user_password')
			);

			if (Auth::attempt($userData)) {
				return Redirect::to('user');
			} else {	 	
				Session::flash('message', 'Invalid Credentials');
				return Redirect::to('login')
					->withInput(Input::except('user_passwordd'));
			}
		}
	}
}
