<?php

class BookedApptsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//$bookedappts = BookedAppt::where('location', '=', 'Union Station')->first();
		//$bookedappts = BookedAppt::where('location', '=', 'Union Station')->first();
		//$linkedAppt = BookedAppt::find(1)->client;
		//$bookedappts = $linkedAppt;
		//$bookedappts = BookedAppt::find(1);
		//$bookedappts = BookedAppt::all();
		// $firstClient = BookedAppt::find(1);
		// $firstClient->client;
		$allBookedAppts = BookedAppt::all();
		$allBookedAppts->load('client', 'availAppt');


		return Response::json(array(
				'error' => 'false',
				'timeZoneDiff' => -6,
				'status'=>200,
				'bookedAppts'=>$allBookedAppts
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
		$bookedappt = new BookedAppt;
	    $bookedappt->clientId = Request::json('clientId');
	    $bookedappt->apptId = Request::json('apptId');
	    $bookedappt->clientDescription = Request::json('clientDescription');
	    $bookedappt->location = Request::json('location');
	    $bookedappt->sessionType = Request::json('sessionType');
	    //$client->id = Auth::client()->id;

	  
	    // Validation and Filtering is sorely needed!!
	    // Seriously, I'm a bad person for leaving that out.
	 	
	 	//saves table
	    $bookedappt->save();

	    //formatted response
	    return 
		"<pre>".
		json_encode(array(
			'error' => 'false',
			'timeZoneDiff' => -6,
			'status'=>'OK',
			'status_code'=>200,
			'bookedAppts'=>$bookedappt
		),JSON_PRETTY_PRINT)
		."<pre>"; 
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
