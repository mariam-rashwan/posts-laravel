<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;


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
Route::resource('posts',PostController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'hello';
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');

Route::post('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');

Route::delete('/posts/{postId}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');


Route::get('/posts/{postId}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->stateless()->redirect();
})->name('auth.github');
Route::get('/auth/callback', function () {
    // dd('dkfmkfm');

    $user = Socialite::driver('github')->stateless()->user();

    dd($user);
    // $user->token ->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
});

Route::get('/redirect', function () {
    return Socialite::driver('google')->stateless()->redirect();
})->name('auth.google');
Route::get('/callback', function () {
    // dd('dkfmkfm');

    $user = Socialite::driver('google')->stateless()->user();

    dd($user);
    // $user->token ->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
});


