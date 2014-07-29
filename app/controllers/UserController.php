<?php

class UserController extends BaseController {

	/*
	 * display user listing
	 * 
	 * @param
	 * @return
	 */
	public function index()
	{
		//get all users in the database
		$users = User::all();

		//create a view for index page
		return View::make('user.index')
			->with(array('users' => $users));
	}

	/*
	 * display user form inputs
	 * 
	 * @param
	 * @return
	 */
	public function create()
	{
		return View::make('user.create');
	}

	/*
	 * save new user to database
	 * 
	 * @param
	 * @return
	 */
	public function store()
	{
		//create rules 
		$rules = array(
			'user_email'    => 'required|email',
			'user_password' => 'required',
			'user_access' => 'required'
		);

		//validate posted data
		$validator = Validator::make(Input::all(), $rules);
		
		//check if data is ok
		if($validator->fails()) {
			return Redirect::to('user/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$user = new User;
			$user->user_email    = Input::get('user_email');
			$user->user_password = Input::get('user_password');
			$user->user_access = Input::get('user_access');
			$user->save();

			Session::flash('message', 'User successfully created');
			return Redirect::to('user');
		}


	}

	/*
	 * display form with selected user data
	 * 
	 * @param string
	 * @return
	 */
	public function edit($id) 
	{
		return View::make('user.edit')
			->with(array('user'=>User::find($id)));
	}

	/*
	 * update user in the database
	 * 
	 * @param
	 * @return
	 */
	public function update($id) 
	{
		
	}

	/*
	 * make user inactive
	 * 
	 * @param
	 * @return
	 */
	public function delete($id) 
	{
		$user = User::where('id', '=', $id)
			->delete();

		Session::flash('message', 'User successfully deleted');
		return Redirect::to('user');
	}

}
