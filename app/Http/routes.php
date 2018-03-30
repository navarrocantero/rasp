<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Route::get('/', function () {

    return view('welcome');

});

Route::get('/abrir', function () {


    $process = new Process('python python/abrir.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    $result = $process->getOutput();
    return $result;


});

Route::get('/comprobar', function () {

    $process = new Process('python python/comprobar.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    $result = $process->getOutput();
    return $result;

});