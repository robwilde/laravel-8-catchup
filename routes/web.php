<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', static function () {
    return view('posts', [
        'posts' => Post::with('category', 'author')->get(),
    ]);
});

Route::get('posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post,
    ]);
});

Route::get('categories/{category:slug}', static function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
    ]);
});

Route::get('authors/{author:username}', static function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author']),
    ]);
});
