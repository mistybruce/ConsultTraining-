<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;

use Redirect;

use App\Http\Requests\PostFormRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::where('active', 1)->orderBy('created_at', 'desc')->paginate(5);
		$title = 'Latest Posts';

		return view('home')->withPosts($posts)->withTitle($title);
	}

	public function create (Request $request)
	{
		if($request->user()->can_post())
		{
			return view('posts.create');
		} 
		else
		{
			return redirect('/')->withErrors("You don't have permission to write a post!");
		}
	}

	public function store(PostFormRequest $request)
	{
		$post = new Post();
		$post->title = $request->get('title');
		$post->body = $request->get('body');
		$post->slug = str_slug($post->title);
		$post->author_id = $request->user()->id;
		if($request->has('save'))
		{
			$post->active = 0;
			$message = "Post saved successfully";
		}
		else 
		{
			$post->active = 1;
			$message = "Post published successfully";
		}
		$post->save();
		return redirect('edit/' . $post->slug)->withMessage($message);
	}

	public function show($slug)
	{
		$post = Post::where('slug', $slug)->first();
		if(!$post)
		{
			return redirect('/')->withErrors('requested page not found');
		}

		$comments = $post->comments;
		return view('posts.show')->withPost($post)->withComments($comments);
	}

	public function edit(Request $request, $slug)
	{
		$post = Post::where('slug', $slug)->first();
		if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin() ))
		{
			return view('posts.edit')->withPost($post);
		}
		return redirect('/')->withErrors("You can't edit this.");
	}

	public function update(Request $request)
	{
		$post_id = $request->input('post_id');
		$post = Post::find($post_id);
		if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin() ))
		{
			$title = $request ->input('title');
			$slug = str_slug($title);
			$duplicate = Post::where('slug', $slug)->first();
			if($duplicate)
			{
				if($duplicate->id != $post_id)
				{
					return redirect('edit/' . $post->slug)->withErrors('Title already exists.')->withInput();
				}
				else
				{
					$post->slug = $slug;
				}
			}

			$post->title = $title;
			$post->body = $request->input('body');
			if($request->has('save'))
			{
				$post->active = 0;
				$message = 'Post saved successfully';
				$landing = 'edit/' . $post->slug;
			}
			else
			{
				$post->active = 1;
				$message = "Post updated successfully";
				$landing = $post->slug;
			}
			$post->save();
			return redirect($landing)->withMessage($message);
		}
		else
		{
			return redirect('/')->withErrors("You can't do this.");
		}
	}

	public function destroy(Request $request, $id)
	{
		$post = Post::find($id);
		if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin() ))
		{
			$post->delete();
			$data['message'] = 'Post deleted successfully';
		}
		else
		{
			$data['errors'] = "You can't delete this";
		}
		return redirect('/')->with($data);
	}
}