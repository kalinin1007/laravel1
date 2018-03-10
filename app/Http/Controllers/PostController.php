<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function try_blade(){
        $data = ['one'=>'111','two'=>'222','three'=>'333',];
        return view('tryBlade', ['data' => $data]);
    }
    
    public function test($slug, $id){
			return "$slug __\\__ $id";
		}
}
