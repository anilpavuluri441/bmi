<?php
Route::group(['namespace' => 'anilpavuluri441\BMI\Controllers', 'prefix' => 'anilpavuluri/bmi'], function () {
    Route::get('/', ['as' => 'bmi_path', 'uses' => 'BmiController@index']);
});