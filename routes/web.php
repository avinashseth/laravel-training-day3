<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@getUsers')->name('get-homepage');

// create new user
Route::get('/new-user', 'UserController@getAddNewUser')->name('get-new-user');

Route::get('/view-user/{user_id}', 'UserController@getUserDetails')->name('get-user-details');


Route::get('/update-user/{user_id}', 'UserController@getUpdateUser')
    ->name('get-update-user');

Route::get('/delete-user/{user_id}', 'UserController@getDeleteUser')->name('get-delete-user');
