<?php

include 'vendor/autoload.php';

use Chain\Alarm;
use Chain\Locks;
use Chain\Lights;
use Chain\HomeStatus;

$status = new HomeStatus();

// Create our objects
$lights = new Lights();
$locks= new Locks();
$alarm = new Alarm();

// Set the successors
$lights->succeedWith($alarm);
$alarm->succeedWith($locks);

try {
    // Initialize the chain
    $lights->check($status);
    echo "You house is safe!";
} catch (\Chain\Exception $e) {
    echo $e->getMessage();
}