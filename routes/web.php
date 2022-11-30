<?php

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

Route::get('/', function () {
    $files = \Illuminate\Support\Facades\File::files(resource_path('post'));
    $posts = [];

    foreach($files as $file){
        $document = \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);

        $posts[] = new \App\Models\Posts(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body
        );
    }

    return $posts;
});
