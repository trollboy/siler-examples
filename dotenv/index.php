<?php

require_once __DIR__.'/../vendor/autoload.php';

use Siler\{Dotenv, Route};

Dotenv\init(__DIR__);

Route\get('/app-env', function () {
    print Dotenv\env('APP_ENV');
});
