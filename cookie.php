<?php
$cookie_name = 'authorized';
$cookie_value = true;

// 86400 = 1 day
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");