<?php
include('conf.php');
$front = FrontController::getInstance();
$front->route();
echo $front->getBody();