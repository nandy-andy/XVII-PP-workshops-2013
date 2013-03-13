<?php
require_once __DIR__ . '/vendors/silex/autoload.php';
require_once __DIR__ . '/models/Blog.class.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__. '/templates',
));
$app['debug'] = true;

$blog = new Blog();
$app->get('/', function() use ($app, $blog) {
	return $app['twig']->render('blog.html', array(
		'title' => 'Listing',
		'posts' => $blog->getPosts(),
		'categories' => $blog->getCategories(),
		'archives' => array(),
	));
});

$app->get('/post/{id}', function($id) use ($app, $blog) {
	return $app['twig']->render('single.html', array(
		'title' => 'A post',
		'post' => $blog->getPost($id),
		'categories' => $blog->getCategories(),
		'archives' => array(),
	));
});

$app->post('/post/{id}/comment', function($id) use ($app, $blog) {
	die('Posted comment for post#' . $id);
});

$app->run();