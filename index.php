<?php

require_once('vendor/autoload.php');

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$f3 = Base::instance();

$db = new Database();

$controller = new Controller($f3, $db);

$f3->route('GET /', function () {
    global $controller;
    $controller->homePage();
});

$f3->route('GET /page23', function () {
    global $controller;
    $controller->page23();
});

//run fat free
$f3->run();