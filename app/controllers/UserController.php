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
		return View::make('user.index')
			->with(array(
				'users' => User::all()));
	}

	public function create()
	{
		return View::make('user.create');
	}

	public function save()
	{
		$input = Input::all();
	}


	public function edit($id) 
	{
		return View::make('user.edit')
			->with(array('user'=>User::find($id)));
	}

	public function update($id) 
	{
		return View::make('user.update');	
	}

	public function delete($id) 
	{
		$user = User::where('id', '=', $id)
			->delete();
			
		return View::make('user.index')
			->with(array(
				'users' => User::all()));
	}

}
