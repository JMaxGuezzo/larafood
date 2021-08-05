<?php
Route::any('admin/pans/search', 'Admin\PlanController@search')->name('plans.search');
Route::post('admin/pans', 'Admin\PlanController@store')->name('plans.store');
Route::get('admin/plans', 'Admin\PlanController@index')->name('plans.index');
Route::get('admin/create', 'Admin\PlanController@create')->name('plans.create');
Route::get('admin/plans/{url}/edit', 'Admin\PlanController@edit')->name('plans.edit');
Route::put('admin/plans/{url}', 'Admin\PlanController@update')->name('plans.update');
Route::get('admin/plans/{url}', 'Admin\PlanController@show')->name('plans.show');
Route::delete('admin/plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');

Route::delete('admin', 'Admin\PlanController@index')->name('admin.home');

Route::get('/', function () {
    return view('welcome');
});
