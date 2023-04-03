<?php
$routes = array(
    '/' => [
        'controller' => 'HomeController',
        'method' => 'index',
        'params' => ['id']
    ],
    '/contacts' => [
        'controller' => 'HomeController',
        'method' => 'contacts',
        'params' => ['id']
    ],
    '/:any' => [
        'controller' => 'HomeController',
        'method' => 'anyAction',
        'params' => ['id']
    ],
);
$roterParams = array(
    'link' => 'HomeController/index',
    'params' => ['id']
);