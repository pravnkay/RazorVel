<?php

/*
|--------------------------------------------------------------------------
| File which returns array of constants containing the razorpay 
| integration configurations. 
|--------------------------------------------------------------------------
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | RAZORPAY CONFIGURATIONS
    |--------------------------------------------------------------------------
    |
    | You can configure the Razorpay configurations by using the below 'env' varibales.
    | Use php artisan vendor:publish to publish configuartions files
    |
    | NOTE: Do not share the razorpay secrets and tokens.
    |
    */

    'KEY_ID' => env('RAZORPAY_KEY_ID', false),

	'KEY_SECRET' => env('RAZORPAY_KEY_SECRET', false),
	
	'DISPLAY_CURRENCY' => env('RAZORPAY_DISPLAY_CURRENCY', 'INR'),

    /*
    |--------------------------------------------------------------------------
    | Razorpay some x
    |--------------------------------------------------------------------------
    |
    | Specify the other configurations
    |
    */

    'RAZORPAY_X' => '<YOUR_RAZORPAY_X>',
    'SAMPLE' => 'SAMPLE_STRING_654',

];
