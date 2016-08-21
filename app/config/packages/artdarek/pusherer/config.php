<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| Pusher Config
	|--------------------------------------------------------------------------
	|
	| Pusher is a simple hosted API for quickly, easily and securely adding
	| realtime bi-directional functionality via WebSockets to web and mobile 
	| apps, or any other Internet connected device.
	|
	| NOTE: The options debug, host, port and timeout is deprecated.
	| Please use this values inside the options field.
	*/
  
	/**
	 * App id
	 */
	'app_id' => '239684', 

	/**
	 * App Key
	 */
	'key' => '40f9b4a93137b2be762f',

	/**
	 * App Secret
	 */
	'secret' => '73e7bdb392a46ad2805f',

	/**
	 * App Options
	 * Avaliables: scheme, host, port, timeout, encrypted
	 */
	'options' => array(
		'encrypted' => true
	),
);
