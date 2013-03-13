<?php
require_once __DIR__ . '/vendors/silex/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__. '/templates',
));

$app->get('/', function() use ($app) {
    return $app['twig']->render('blog.html');
});

$app->get('/post/{id}', function($id) use ($app) {
	return $app['twig']->render('single.html');
});

$app->run();
