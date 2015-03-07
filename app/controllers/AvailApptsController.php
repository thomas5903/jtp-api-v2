<?php

class AvailApptsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$avappt = AvailAppt::all();
		//$options = "JSON_PRETTY_PRINT";

		return Response::json(array(
				'error' => 'false',
				'timeZoneDiff' => -6,
				'status'=>200,
				'availAppts'=>$avappt
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
		//assigns vars from request
		$avappt = new AvailAppt;
	    $avappt->date = Request::json('date');
	    $avappt->isBooked = Request::json('isBooked');
	    $avappt->setup = Request::json('setup');
	    //$client->id = Auth::client()->id;

	  
	    // Validation and Filtering is sorely needed!!
	    // Seriously, I'm a bad person for leaving that out.
	 	
	 	//saves table
	    $avappt->save();

	    //formatted response
	    return Response::json(array(
				'error' => 'false',
				'timeZoneDiff' => -6,
				'status'=>200,
				'availAppts'=>$avappt
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
