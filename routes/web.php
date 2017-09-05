<?php

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
    return view('app/home');
});

/** NewsController */
Route::get('/news','Core\NewsController@index')->name('newsWelcome');





/** LearningController*/
Route::get('/learns','Core\LearningController@index')->name('learnWelcome');





/** OfferController*/
Route::get('/offers','Core\OfferController@index')->name('offerWelcome');



/** GalleryController*/
Route::get('/gallery','Core\GalleryController@index')->name('galleryWelcome');




/** UserController*/
Route::get('/users','Core\UsersController@index')->name('welcome');