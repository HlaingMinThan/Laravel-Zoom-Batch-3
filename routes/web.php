<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

//resource - blog
Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'show']);

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
