<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/src/FunkyMonkeyLabs/Console/FunkyMonkeyApplication.php';

$funkyMonkeyApplication = new \FunkyMonkeyLabs\Console\FunkyMonkeyApplication();

$console = new \Abdulklarapl\Components\Console\Console();
$console->registerApplication($funkyMonkeyApplication);
$console->run();