<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title="";
        if(request('category')){
            $category= Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author=User::firstWhere('username', request('author'));
            $title=' By ' . $author->name;
        }
        return view('posts', [
            'title' => 'All post '. $title,
            'active'=>'post',
            // 'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category','author']))->paginate(10)->withQueryString(),
            'xpost' => Post::all()->toArray() 
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'active' => 'post',
            'post' => $post
        ]);
    }
    public function xpost(Post $post){
        return view('xpost', [
            'title' => $post->title,
            'active' => 'post',
            'categories' => Category::orderBy('name')->get(),
            'posts' => Post::all()
        ]);
    }

    public function xshow(Post $post)
    {
        if (!auth()->check()) {
            // return abort(403);
            return "kamu belum login";
        }
        if (auth()->check()) {
            if (auth()->user()->username == 'dwimasbudi' && $post->slug == 'dwimas-supr-baru') {
                return "fix";
            }
            if (auth()->user()->username == 'dwimasbudi') {
                return "hallo dwimas";
            } else {
                return "kamu bukan dwimas:)";
            }
        }

        return $post;
    }
    
}
