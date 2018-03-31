<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Http\TestDepen;
use App\library\classes\ActionRepository;

Route::get('/', 'BlogController@index')->name('home');

Route::get('/__{slug}', 'BlogController@showPost')->name('showPost');

Route::get('/resolve', 'PostController@resolve');

Route::get('/some', 'PostController@someAction');

Route::get('/rel', 'BlogController@rel');

Route::get('/rel-create', 'BlogController@relCreate');


Route::get('/greet', function (Request $req) {
	  return view('greet', ['name' => 'James']);
	})->middleware('checkage');
	
Route::get('/req', function (Request $request) {
	//$uri = $request->path();
	 dump($request);
	});
        
Route::get('/dep', function (TestDepen $dep) {
	//$uri = $request->path();
	 dump($dep);
	});

Route::get('/rep', function (ActionRepository $rep) {
	//$uri = $request->path();
            dump($rep->getArr());
	});        
        
        
        
        
/*       
Route::get('greet/{name}', function ($name) {
        $param = 'with name';
        return view('greet', ['name' => $name, 'param' => $param]);
})->where('name', '[0-9A-Za-z]+');

Route::get('/termit-05-40', function () {
	  return view('greet', ['name' => 'termit-05-40']);
          
});

Route::get('/blog/{slug?}', function ($slug=null) {
	  return view('greet', ['name' => 'blog', 'param' => $slug]);
          
});

Route::get('/try-blade',['uses' => 'PostController@try_blade', 'as' => 'try-blade']);
*/

/* Very interesting posibility!!! */
Route::get('/test/{slug}..{id}', 'PostController@test')->where(['id'=>'[0-9]+', 'slug'=>'[a-zA-Z-]+']);


