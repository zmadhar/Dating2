<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

//autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');
require_once('model/validation.php');
require_once('controllers/controller.php');
//Create an instance of the Base class

$f3 = Base::instance();
$controller = new Controller($f3);

//Define a default route

$f3->route('GET|POST /', function(){

    $view = new Template();
    echo $view->render('views/Dating.html');
});

$f3->route('GET|POST /first', function($f3){

$GLOBALS["controller"]->first($f3);

});



$f3->route('GET|POST /second', function($f3){

    $GLOBALS["controller"]->second($f3);

});


$f3->route('GET|POST /third', function($f3){

    $GLOBALS["controller"]->third($f3);

});




$f3->route('GET|POST /last', function() {

    $_SESSION['indoor'] = implode(", ", $_POST['indoor']);
    $_SESSION['outdoor'] = implode(", ", $_POST['outdoor']);

    $view = new Template();
    echo $view->render('views/last.html');
});

//fat free
$f3->run();




