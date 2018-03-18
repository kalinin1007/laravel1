<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $href = route('showPost', ['slug'=>'opp-ruth', 'id'=>258]);
	return view('index', ['href'=>$href]);
    }
	
    public function showPost($slug, $id)
    {
        return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
}
