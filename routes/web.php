<?php

/**
 * Application routes.
 */

Route::apiResource('posts', 'Api\PostController');
Route::get('/', function () {
    return view('welcome');
});

