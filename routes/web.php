<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('hello', function () {
	return response()->json(
		[
			'application_name' => 'lumen-blog-app',
			'message' => 'hello world.'
		]
	);
});

$router->get('user/{id}', function ($id) {
	return 'User Id: '.$id;
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
	return 'Post Id: '.$postId.', Comment Id: '.$commentId;
});