<?php

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$locations = Location::all();
		//$options = "JSON_PRETTY_PRINT";

		return Response::json(array(
				'error' => 'false',
				'timeZoneDiff' => -6,
				'status'=>200,
				'locations'=>$locations
			),$status=200, $headers=[], $options=JSON_PRETTY_PRINT);
		;

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$location = new Location;
	    $location->place = Request::json('place');
	    $location->description = Request::json('description');
	    $location->imgUrl = Request::json('imgUrl');
	    $location->url = Request::json('url');
	    $location->googleMap = Request::json('googleMap');

	    $location->save();

		return Response::json(array(
				'error' => 'false',
				'timeZoneDiff' => -6,
				'status'=>200,
				'availAppts'=>$location
			),$status=200, $headers=[], $options=JSON_PRETTY_PRINT);
		;
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
		//
	}


	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
