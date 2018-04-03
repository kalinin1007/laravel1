<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Coment;
use App\User;
use Illuminate\Support\Facades\Gate;

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
        $can_comment = Gate::allows('comment');
        $coments = Coment::where('post_id','=',$post->id)->get();
        return view('post',['post'=>$post,
                            'coments'=>$coments, 
                             'href'=>$href,
                             'can_comment'=> $can_comment,
                            ]);
        //return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
    
    
    public function rel()
    {
        $posts = User::where('id','=', 1)->first()->posts;
        return view('index',['rel_posts'=>$posts]);
        //return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
    
    public function relCreate()
    {
        
        
        User::where('id','=', 1)->first()->posts()->create([
                                    'title'=>'post from code',
                                    'text'=>'this post was created by laravel',
                                    'slug'=>'post-code',
                                    'img'=>'img/5.png',
                                ]);
        return 'OK';
        //return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
}
