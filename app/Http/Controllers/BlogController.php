<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Coment;

class BlogController extends Controller
{
    public function index()
    {
        $href = route('showPost', ['slug'=>'opp-ruth', 'id'=>258]);
        //$data = DB::select('select * from one');
        $data = Post::all();
	return view('index', ['href'=>$href, 'data'=>$data]);
    }
	
    public function showPost($slug)
    {
        $href = route('showPost', ['slug'=>'opp-ruth', 'id'=>258]);
        $post = Post::where('slug', '=', $slug)->first();
        $coments = Coment::where('post_id','=',$post->id)->get();
        return view('post',['post'=>$post, 'coments'=>$coments, 'href'=>$href]);
        //return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
}
