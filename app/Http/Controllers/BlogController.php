<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $href = route('showPost', ['slug'=>'opp-ruth', 'id'=>258]);
        $data = DB::select('select * from one');
	return view('index', ['href'=>$href, 'data'=>$data]);
    }
	
    public function showPost($slug, $id)
    {
        return "<h2>Showing post id - $id , slug - $slug</h2>";
    }
}
