<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $blogs = [
        [
            'title' => 'My First Blog',
            'filename' => 'first-blog',
            'intro' => 'lorem..',
            'created_at' => '20.6.2023'
        ],
        [
            'title' => 'My second Blog',
            'filename' => 'second-blog',
            'intro' => 'lorem..',
            'created_at' => '20.6.2023'
        ],
        [
            'title' => 'My third Blog',
            'filename' => 'third-blog',
            'intro' => 'lorem..',
            'created_at' => '20.6.2023'
        ],
        [
            'title' => 'My fourth Blog',
            'filename' => 'fourth-blog',
            'intro' => 'lorem..',
            'created_at' => '20.6.2023'
        ],
    ];
    return view('home', [
        'blogs' => $blogs
    ]);
});
Route::get('/blogs/{filename}', function ($filename) {
    if (!File::exists('../resources/views/blogs/' . $filename . ".blade.php")) {
        // abort(404);
        return redirect('/');
    }
    return view('blogs.' . $filename);
})->whereAlphaNumeric('filename');

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
