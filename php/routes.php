<?php
// Require the class
include 'route.php';

// Use this namespace
use GSD\Route;

// Add the first route
Route::add('/', function() {

	exec ("php /app/db-setup.php",$result);
	$result = var_dump($result);

	print_r($result);

	}, 'get');

// Run the router
Route::run('/');
?>
