//wildcards value//

Route::get('/posts/{post}', function() {
	return view('post');
});


Route::get('/posts/{post}', function($post) {
	return $post;
});



Route::get('/posts/{post}', function($post) {
	$post=[
		'my-first-post' => 'Hello, This is my first blog post!',
		'my-second-post' => 'Now I am getting the hang of this blogging thing.'
	];
	return view['post', [
		'post' => $posts[$post]
	]);
});



Route::get('/posts/{post}', function($post) {
	$post=[
		'my-first-post' => 'Hello, This is my first blog post!',
		'my-second-post' => 'Now I am getting the hang of this blogging thing.'
	];
	
	if(! array_key_exists($post, $posts)) {
		abort(404, 'Sorry, that post was not found.');
	}
	
	
	return view['post', [
		'post' => $posts[$post]
	]);
});