<?php

include_once "Password.php";
use MyProject\Protection\Password;
$pass = new Password();
echo $pass->generate(15);
