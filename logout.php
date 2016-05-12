<?php

unset($_SESSION['authorized']);
unset($_SESSION['user']);

header('Location: index.php');