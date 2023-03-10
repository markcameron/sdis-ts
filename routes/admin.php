<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'content'], function () {
    Route::module('news');
    Route::module('pages');
    Route::module('documents');
    Route::module('homepageHeroes');
});

Route::group(['prefix' => 'other'], function () {
    Route::module('stats');
    Route::module('emergencyNumbers');
    Route::module('interventions');
});
