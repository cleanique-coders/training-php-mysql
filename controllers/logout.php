<?php

require_once '../_inc_.php';

unset($_SESSION['authorized']);
unset($_SESSION['user']);

header('Location: ../login.php');