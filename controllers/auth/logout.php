<?php

unset($_SESSION['authorized']);
unset($_SESSION['user']);

Response::output(null,'Thank you!');