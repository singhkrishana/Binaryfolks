//Routing to controllers//

<?php

	namespace App\Http\controllers;
	
	class PostsController
	{
		public function show()
		{
			return 'hello';
		}
	}
	
	
	
<?php

	namespace App\Http\controllers;
	
	class PostsController
	{
		public function show()
		{
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
		}
	}
	
	
	
	
	
	class PostsController extends Controller
	{
		public function show()
		{
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
		}
	}