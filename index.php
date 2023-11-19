<?php

// require_once('../app/Controller/HomeController.php');
require_once(__DIR__ . '/app/Controller/HomeController.php');

$controller = new HomeController();
$controller->index();
