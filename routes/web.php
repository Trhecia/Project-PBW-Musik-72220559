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
Route::group(['middleware' => ['guest']], function () {
    Route::get("/","PageController@login");
    Route::post("/login","AuthController@cekLogin");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/logout","AuthController@cekLogout");
    Route::get("/user","PageController@edituser");
    Route::post("/updateuser","PageController@updateuser");

    Route::get("/home","PageController@home");
    Route::get("/musik","PageController@musik");
    Route::get("/musik/form-add","PageController@formaddmusik");
    Route::post("/save","PageController@savemusik");
    Route::get("/musik/edit-form/{id}", "PageController@formeditmusik");
    Route::put("/update/{id}", "PageController@updatemusik");
    Route::get("/delete/{id}", "PageController@deletemusik");
});