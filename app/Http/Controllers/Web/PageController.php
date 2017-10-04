<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class PageController extends Controller
{
    
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->paginate(3);

    	return view('web.posts', compact('posts'));
    }

    public function category($slug){
    	//filtro por categoria
    }

    public function tag($slug){
    	//filtro por etiqueta
    }

    public function post($slug){
    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

}
