<?php

error_reporting(0);

require_once 'inc/functions.php';
require_once 'inc/_config_.php';
require_once 'inc/class.header.php';
require_once 'inc/class.response.php';
require_once 'inc/class.token.php';
require_once 'inc/class.route.php';
require_once 'config/routes.php';

Header::allowAPICall();

Route::parse();