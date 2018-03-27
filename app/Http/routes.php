<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use PiPHP\GPIO\GPIO;
use PiPHP\GPIO\Pin\PinInterface;

Route::get('/', function () {

    // Create a GPIO object
    $gpio = new GPIO();

// Retrieve pin 18 and configure it as an output pin
    $pin = $gpio->getOutputPin(18);

// Set the value of the pin high (turn it on)
    $pin->setValue(PinInterface::VALUE_HIGH);
    return view('welcome');


});
