<?php

require_once 'data/LoginRequest.php';
require_once 'exception/ValidationException.php';
require_once 'helper/ValidationUtil.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "Ahsan";
$loginRequest->password = "dd";

ValidationUtil::validate($loginRequest);
ValidationUtil::validateReflection($loginRequest);