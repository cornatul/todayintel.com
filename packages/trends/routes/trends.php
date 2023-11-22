<?php

use Cornatul\Trends\Http\Controllers\TrendsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web','auth'],'prefix' => 'trends', 'as' => 'trends.'], static function () {


    //generate the route for googleNews
    Route::get('/index', [TrendsController::class, 'trending'])->name('trending');
});
