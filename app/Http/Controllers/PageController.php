<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use App\Post;

use League\CommonMark\CommonMarkConverter;

class PageController extends Controller
{
	public function index(){
		$pages = Page::where('slug','!=','hakkimda')->get();
		return view('admin.page.index', ['pages' => $pages]);
	}

	public function new(){
		$page = new Page();
		$page->id = -1;
		return view('admin.page.edit', ['page' => $page]);
	}

	public function save(Request $request){
		if($request->input('id') == -1){
			$page =new Page();
		}
		else{
			$page = Page::find($request->input('id'));
		}
		$page->slug = $request->input('slug');
		$page->title = $request->input('title');
		$page->content = $request->input('content');
		$page->save();
		return redirect('/kanepe/pages');
	}

	public function edit(Page $page){
		return view('admin.page.edit', ['page' => $page]);
	}

	public function delete(Page $page){
		$page->delete();
		return redirect('/kanepe/pages');
	}
	public function viewPage($slug){
		$page = Page::where('slug',$slug)->firstOrFail();
		return view('blog.page', ['page' =>$page]);
	}

	public function saveAboutMe(Request $request){
		$aboutMe = Page::where('slug','hakkimda')->firstOrFail();
		$aboutMe->content = $request->input('content');
		$aboutMe->save();
		return redirect('/kanepe/aboutme');
	}

	public function editAboutMe(){
		$aboutMe = Page::where('slug','hakkimda')->firstOrFail();
		return view('admin.page.editAboutMe', ['aboutMe' =>$aboutMe]);
	}

	public function viewAboutMe(){
		$aboutMe = Page::where('slug','hakkimda')->firstOrFail();
		$posts = Post::orderBy('id','desc')->skip(0)->take(10)->get();

		$converter = new CommonMarkConverter();
		$aboutMe->content = $converter->convertToHtml($aboutMe->content);

		return view('index', ['aboutMe'=>$aboutMe, 'posts'=>$posts]);
	}
}
