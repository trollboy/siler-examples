<?php

require_once __DIR__.'/../vendor/autoload.php';

use Siler\Route;

Route\get('/', function () {
    print('Hello World!');
});

Route\get('/hello/{name}', function ($params) {
    printf('Hello %s', $params['name']);
});

Route\get('/hello-world/{name}', 'hello_world.phtml');
