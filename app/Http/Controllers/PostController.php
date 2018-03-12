<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\TestDepen;
use App\library\classes\SomeClass;

class PostController extends Controller
{
    public function try_blade(){
        $data = ['one'=>'111','two'=>'222','three'=>'333',];
        return view('tryBlade', ['data' => $data]);
    }
    
    public function test(TestDepen $dep, $slug, $id){
                        $hello = $dep->hello();
			return "$slug __\\__ $id __\\__$hello";
		}
                
    public function resolve() {
        $foo = resolve('UsefulFunc');
        echo $foo();
        echo '</br>';
        echo my_foo1();
    }
    
    public function someAction(SomeClass $s) {
        echo $s->foo();
    }
}
