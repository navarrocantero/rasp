<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Route::get('/', function () {

    return view('welcome');

});

Route::post('/abrir', function () {
    $process = new Process('python python/abrir.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    $result = $process->getOutput();

    return view('welcome',[
        'rele' => $result
    ]);
});

Route::post('/cerrar', function () {
    $process = new Process('python python/cerrar.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    $result = $process->getOutput();

    return view('welcome',[
        'rele' => $result
    ]);
});