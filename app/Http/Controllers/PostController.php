<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Paginator;

class PostController extends Controller
{

	private $itemPerPage = 5;
	public function index(Request $request, $currentPage = 1){
		$posts = Post::orderBy('id', 'desc')->skip(($currentPage-1)*$this->itemPerPage)->take($this->itemPerPage)->get();
		$postsCount = Post::count();
		$paginator = new Paginator('/kanepe/posts/', $postsCount, $this->itemPerPage, $currentPage, true);
		return view('admin.post.index', [
			'posts' => $posts,
			'paginator' => $paginator
		]);
	}

	public function new(){
		$post = new Post();
		$post->id = -1;
		return view('admin.post.edit', ['postum' => $post]);
	}

	public function save(Request $request){
		if ($request->input('id')== -1)
			$post = new Post();
		else
			$post = Post::find($request->input('id'));

		$post->slug = $request->input('slug');
		$post->title = $request->input('title');
		$post->content = $request->input('content');
		$post->save();
		return redirect('/kanepe/posts');
	}

	public function edit(Post $post){
		return view('admin.post.edit', ['postum' => $post]);
	}

	public function delete(Post $post){
		$post->delete();
		return redirect('/kanepe/posts');
	}

	public function viewPost($slug){
		$post = Post::where('slug',$slug)->firstOrFail();
		$disqus = (object)[
			'permalink' =>url("/")."/blog/$post->slug",
			'identifier' =>"post-$post->id",
			'title' => "$post->title",
		];
		return view('blog.post',['post'=>$post,'disqus'=>$disqus]);
	}

	public function blogIndex($currentPage=1){
		$posts = Post::orderBy('id', 'desc')->skip(($currentPage-1)*$this->itemPerPage)->take($this->itemPerPage)->get();
		$postsCount = Post::count();
		$paginator = new Paginator('/blog/page/', $postsCount, $this->itemPerPage, $currentPage, true);
		return view('blog.index', [
			'posts' => $posts,
			'paginator' => $paginator
		]);
	}

}
