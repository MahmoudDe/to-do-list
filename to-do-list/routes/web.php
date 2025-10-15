<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', action: function () {
    return view('jobs', [
           'jobs' => [
            [
            'id' => 1,
            'title'=> 'Learn Laravel',
            'salary' => '8033390',
            ],
            [
            'id' => 2,
            'title' => 'Learn PHP',
            'salary' => '10000000',
            ]
           ],
    ]);
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs/{id}', function ($id) {
    dd($id);
});

Route::get('/contact', function () {
    return view('contact');
});