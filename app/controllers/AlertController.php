<?php

class AlertController extends \BaseController {

    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$date = strtotime(Input::get('time'));
		Alert::create([
		 'user_id'  => Input::get('user_id'),
	   'lat'		=> Input::get('lat'),
	   'lng'		=> Input::get('lng'),
	   'type'		=> Input::get('type'),
	   'remarks' => Input::get('remarks'),
	   'created_at' => date("Y-m-d H:i:s",$date)
		]);
		return Response::JSON(['success'=>true]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Send notification to Pusher
    $message = "This is just an example message!";
    Pusherer::trigger('notification-channel', 'notification-event', array( 'message' => $message ));
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
