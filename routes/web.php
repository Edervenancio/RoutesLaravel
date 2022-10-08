<?php

use Illuminate\Support\Facades\Route;
use LaraDev\Http\Controllers\PostController;
use LaraDev\Http\Controllers\Admin\UserController;

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


Route::resourceVerbs([
        'create' => 'cadastro',
        'edit' => 'editar'
    ]);

Route::get('/', function () {
    return view('welcome');
});


/* 
Route::view('/form', 'form');

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);



Route::get('/users/1', [UserController::class, 'index']);
Route::get('/getData', [UserController::class, 'getData']);
Route::post('/postData', [UserController::class, 'postData']); 

Route::put('/users/1', [UserController::class, 'testPut']); 

Route::patch('/users/1', [UserController::class, 'testPatch']);

Route::match(['put', 'patch'], '/users/2', [UserController::class, 'testMatch']);


Route::delete('/users/1', [UserController::class, 'destroy']);

Route::any('/users', [UserController::class, 'any']);

*/

//Route::resource('posts', ['PostController']);


//Route::get('/posts/premium', [PostController::class, 'premium']);
//Route::resource('posts', PostController::class)->only(['index', 'show']);
//Route::resource('posts', PostController::class)->except(['show']);
// Route::get('/posts', [PostController::class, 'index']);

Route::get('/users', function () {
    echo "Listagem de usuários da minha base";
});

// Route::view('/form', 'form');

/* Route::fallback(function (){
    echo "<h1>Ops... seja bem-vindo a página 404</h1>";
}); */

/*
Route::redirect('/users/add', url('/form'), 301);

Route::get('/artigos', [PostController::class, 'index'])->name('posts.index');
Route::get('/artigos/index', [PostController::class, 'indexRedirect'])->name('posts.indexRedirect');

Route::get('/users/{id}/comments/{comment?}', [UserController::class, 'userC'])->where(['id' => '[0-9]+', 'comment' => '[0-9]+']);




Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null){
    var_dump($id, $comment);
})->where('id', '[0-9]+');


Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null){
    var_dump($id, $comment);
})->where(['id' => '[0-9]+', 'comment' => '[0-9]+']);

*/

//Route::get('/users/1', [UserController::class, 'inspect'])->name('inspect');
/*
Route::prefix('admin')->group(function(){
    Route::view('/form', 'form');
});

Route::name('admin.posts.')->group(function(){
    Route::get('/admin/posts/index', [PostController::class, 'index'])->name('index');
    Route::get('/admin/posts', [PostController::class, 'show'])->name('show');

});

Route::middleware(['throttle:10,1'])->group(function(){
    Route::view('/form', 'form');
});

Route::namespace('Admin')->group(function(){
    Route::get('/users', [UserController::class, 'index']);
}); */

Route::group(['prefix' => 'admin', 'middleware' => ['throttle:10,1'], 'as' => 'admin.'], function(){
    Route::resource('users', UserController::class);
});

