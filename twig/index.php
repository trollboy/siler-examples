<?php

require_once __DIR__.'/../vendor/autoload.php';

use Siler\{Twig, Route, Http\Response};

Twig\init(__DIR__);

Route\get('/{name}', function ($params) {
    print Twig\render('home.twig', $params);
});
