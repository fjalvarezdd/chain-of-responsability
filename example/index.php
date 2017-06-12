<?php

use Acme\Alarm;
use Acme\Locks;
use Acme\Lights;
use Acme\HomeStatus;

$status = new HomeStatus();

// Create our objects
$lights = new Lights();
$locks= new Locks();
$alarm = new Alarm();

// Set the successors
$lights->succeedWith($alarm);
$alarm->succeedWith($locks);

// Initialize the chain
$lights->check($status);