<?php
use App\Core\Routing\Router;


# front controller

include 'bootstrap/init.php';


$router = new Router($request);
$router->run();