<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;
use Auth\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::resource('posts', PostController::class)->middleware('auth');



Route::get('test',function(){
    $user = User::find(1);

    dd($user->posts);
});
Auth::login($user);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
