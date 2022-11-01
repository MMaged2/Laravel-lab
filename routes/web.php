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


Route::resource('posts', PostController::class)->middleware('auth');



Route::get('test',function(){
    $user = User::find(1);

    dd($user->posts);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('auth.github');
 
Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::where('email', $githubUser->email)->first();
    if($user) {
        $user->update([
            'name' => $githubUser->name,
        ]);
    } else {
        $user = User::create([
            'email' => $githubUser->email,
            'name' => $githubUser->name,
        ]);
    }
 
    Auth::login($user);
 
    return redirect('/dashboard');
    dd($user);
});