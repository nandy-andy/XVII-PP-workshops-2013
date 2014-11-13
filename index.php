<?php
require_once __DIR__ . '/vendors/silex/autoload.php';
require_once __DIR__ . '/models/Blog.class.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__. '/templates',
));

$blog = new Blog();
$app->get('/', function() use ($app, $blog) {
	return $app['twig']->render('blog.html', array(
		'title' => 'Performance workshops blog - Listing',
		'posts' => $blog->getPosts(),
		'categories' => $blog->getCategories(),
		'archives' => array(),
	));
});

$app->get('/post/{id}', function($id) use ($app, $blog) {
	return $app['twig']->render('single.html', array(
		'title' => 'Performance workshops blog - A post',
		'post' => $blog->getPost($id),
		'categories' => $blog->getCategories(),
		'archives' => array(),
	));
});

$app->post('/post/{id}/comment', function(Symfony\Component\HttpFoundation\Request $request) use ($app, $blog) {
	$id = $request->get('id');
	$name = $request->get('author');
	$email = $request->get('email');
	$website = $request->get('url');
	$comment = $request->get('comment');
	
	$status = $blog->addComment($id, $name, $email, $website, $comment);
	$param = ($status == true) ? 'success' : 'fail';
	$querystring = ($status == true) ? '#div-comment-' . $status->commentId : '';
		
	return $app->redirect('/post/' . $id . '?' . $param . $querystring);
});

$app->run();
