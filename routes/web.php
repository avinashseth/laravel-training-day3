<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@getUsers');

Route::get('enter-earth/{villian}', 'EarthController@checkVillan')->middleware('avengers');

Route::get('add-new-lesson', 'LessonController@getAddNewLesson')->name('get-add-new-lesson');

Route::post('add-new-lesson', 'LessonController@postAddNewLesson')->name('post-add-new-lesson');