<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
		$href = route('showPost', ['slug'=>'opp-ruth', 'id'=>258]);
		return "<h2>Showing all posts</h2> <a href='$href'>showPost</a>";
	}
	
	public function showPost($slug, $id)
	{
		return "<h2>Showing post id - $id , slug - $slug</h2>";
	}
}
