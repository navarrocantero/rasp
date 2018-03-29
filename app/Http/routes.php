<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Route::get('/', function () {

    return view('welcome');

});

Route::post('/rele', function () {
    $process = new Process('python python/rasp.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    $result = $process->getOutput();

    return view('welcome',[
        'rele' => $result
    ]);
});