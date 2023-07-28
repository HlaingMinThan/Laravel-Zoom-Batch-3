<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{filename}', function ($filename) {
    return view('blog', [
        'blog' => Blog::find($filename)
    ]);
});

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
