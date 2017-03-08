<?php

Auth::routes();

Route::get('/', 'PostsController@index');

Route::post('favorite/{post}', 'PostsController@favoritePost');
Route::post('unfavorite/{post}', 'PostsController@unFavoritePost');

Route::get('my_favorites', 'UsersController@myFavorites')->middleware('auth');
