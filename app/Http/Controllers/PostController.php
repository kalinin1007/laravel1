<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\TestDepen;
use App\library\classes\SomeClass;
use App\library\Interfaces\Counter;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

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
        //$this->authorize('post3', Post::class);
        $foo = resolve('UsefulFunc');
        $some = resolve('SingleSome');
        echo $foo();
        echo '</br>';
        echo my_foo1();
        echo '</br>';
        echo $some->foo();
    }
    
    public function someAction(SomeClass $s, Counter $cou) {
        echo $s->foo();
        $cou->increment();
        $cou->increment();
        echo $cou->getCount();
    }
    
    public function mail() {
        
        Mail::to('kalinin1007@gmail.com')->send(new FeedbackMail('my awesome text'));
        
    }
}
