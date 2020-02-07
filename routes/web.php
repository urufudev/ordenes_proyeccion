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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function () {
    
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can::roles.edit');

    
        //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('can:users.create');

    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('can:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


    //Años
    Route::post('years/store', 'YearController@store')->name('years.store')
        ->middleware('can:years.create');

    Route::get('years', 'YearController@index')->name('years.index')
        ->middleware('can:years.index');

    Route::get('years/create', 'YearController@create')->name('years.create')
        ->middleware('can:years.create');

    Route::put('years/{year}', 'YearController@update')->name('years.update')
        ->middleware('can:years.edit');

    Route::get('years/{year}', 'YearController@show')->name('years.show')
        ->middleware('can:years.show');

    Route::delete('years/{year}', 'YearController@destroy')->name('years.destroy')
        ->middleware('can:years.destroy');

    Route::get('years/{year}/edit', 'YearController@edit')->name('years.edit')
        ->middleware('can::years.edit');



});
