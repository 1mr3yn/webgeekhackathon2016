<?php

class AlertController extends \BaseController {

    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	  return Alert::with('user')->latest()->get();
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
		 
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Alert::with('user')->where('id',$id)->get()->toArray();

    Pusherer::trigger('notification-channel', 'notification-event', array( 'userData' => $user ));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639155851517",
        "shortcode" => "29290682",
        "message_id" =>time(),
        "message" => urlencode("Help is on its way!"),
        "client_id" => "497fbac8d4714608c1ba4e97dcced68611be3007192dced0bb4f054528f51e76",
        "secret_key" => "37c6f2bc07ebfb4d0ae5e4ede30f6eb037a84d216454328fef92a47b10dd786a"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);
    Log::info("SMS Sent!");
    
    sweetAlert('SOS', 'Notification Sent', '', 'success');
    
    exit(0);

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
