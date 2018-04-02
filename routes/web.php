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



Route::get('/rep', function (ActionRepository $rep) {
	//$uri = $request->path();
            Cache::get('key');
            dump($rep->getArr());
            return 'OK';
	});        
        
     
Route::group(['middleware' => 'auth', 'namespace'=>'Admin','prefix'=>'admin'], function () {
    Route::get('/', 'AdminController@index');
    
  });        

        
/* Very interesting posibility!!! */
Route::get('/test/{slug}..{id}', 'PostController@test')->where(['id'=>'[0-9]+', 'slug'=>'[a-zA-Z-]+']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/log', 'HomeController@index')->name('home');

//Route::get('/register', function (ActionRepository $rep) {
//            return 'HUY';
//	}); 
