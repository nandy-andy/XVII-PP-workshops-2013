<?php
require_once __DIR__ . '/vendors/silex/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function() {
    return 'Hello!';
});

$app->run();
