<?php

class ArtworkController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artworks = Artwork::orderBy('updated_at', 'desc')->paginate(15);
		return View::make('artwork.index')
			->with(array('artworks' => $artworks));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('artwork.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create rules 
		$rules = array(
			'artwork_title' => 'required',
			'artwork_tags' 	=> 'required',
			'artwork_image' => 'required'
		);

		//validate posted data
		$validator = Validator::make(Input::all(), $rules);
		
		//check if data is ok
		if($validator->fails()) {
			return Redirect::to('artwork/create')
				->withErrors($validator);
		} else {
			$file = Input::file('artwork_image');
			$destinationPath = 'uploads';
			// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
			$filename = time() . '.' . $file->getClientOriginalExtension();
			$upload_success = Input::file('artwork_image')->move($destinationPath, $filename);
			
			if($upload_success) {
				$artwork = new artwork;
				$artwork->artwork_title = Input::get('artwork_title');
				$artwork->artwork_tags  = Input::get('artwork_tags');
				$artwork->artwork_image = $filename;
				$artwork->save();

				Session::flash('message', 'artwork successfully created');

				return Redirect::to('artwork');
			} else {
				return Redirect::to('artwork/create')
				->withErrors($validator);
			}
			
		}
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artwork = Artwork::find($id);

		return View::make('artwork.edit')
			->with(array('artwork' => $artwork));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//create rules 
		$rules = array(
			'artwork_title' => 'required',
			'artwork_tags' 	=> 'required'
			//'artwork_image' => 'required',
		);

		//validate posted data
		$validator = Validator::make(Input::all(), $rules);
		
		//check if data is ok
		if($validator->fails()) {
			return Redirect::to('artwork/' . $id . '/edit')
				->withErrors($validator);
		} else {
			$artwork = artwork::find($id);
			$artwork->artwork_title = Input::get('artwork_title');
			$artwork->artwork_tags  = Input::get('artwork_tags');
			$artwork->save();

			Session::flash('message', 'artwork successfully updated');

			return Redirect::to('artwork');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$artwork = artwork::find($id);
		$artwork->delete();

		Session::flash('delete', 'artwork successfully deleted');
		return Redirect::to('artwork');
	}


}
