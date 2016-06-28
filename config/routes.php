<?php

Route::$root = '/';

Route::$routes = [
	'claims' => [
		'method' => 'get',
		'controllers' => 'claims/index'
	],
	'login' => [
		'method' => 'get',
		'controllers' => 'auth/login'
	],
	'logout' => [
		'method' => 'get',
		'controllers' => 'auth/logout'
	]
];