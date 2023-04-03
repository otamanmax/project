<?php
use App\Http\Request;

/*
| Router logic
*/
require_once "mainRouter.php";
require_once "route.php";

require_once __DIR__."/../configs/routes/mainRoutes.php";

$request = new Request();
$roter = new Router($request);
$roter->addRoutes($routes); // all routes from config
?>