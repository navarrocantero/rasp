<?php
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Route::get('/', function () {
    $process = new Process('python python/rasp.py');
    $process->run();
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    return view('welcome');

});
