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
        ->middleware('can:roles.edit');

    
        //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('can:users.create');

    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('can:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');


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
        ->middleware('can:years.edit');

    
        //Gestiones
    Route::post('gestions/store', 'GestionController@store')->name('gestions.store')
        ->middleware('can:gestions.create');

    Route::get('gestions', 'GestionController@index')->name('gestions.index')
        ->middleware('can:gestions.index');

    Route::get('gestions/create', 'GestionController@create')->name('gestions.create')
        ->middleware('can:gestions.create');

    Route::put('gestions/{gestion}', 'GestionController@update')->name('gestions.update')
        ->middleware('can:gestions.edit');

    Route::get('gestions/{gestion}', 'GestionController@show')->name('gestions.show')
        ->middleware('can:gestions.show');

    Route::delete('gestions/{gestion}', 'GestionController@destroy')->name('gestions.destroy')
        ->middleware('can:gestions.destroy');

    Route::get('gestions/{gestion}/edit', 'GestionController@edit')->name('gestions.edit')
        ->middleware('can:gestions.edit');


                //Instituciones
    Route::post('institutions/store', 'InstitutionController@store')->name('institutions.store')
        ->middleware('can:institutions.create');

    Route::get('institutions', 'InstitutionController@index')->name('institutions.index')
        ->middleware('can:institutions.index');

    Route::get('institutions/create', 'InstitutionController@create')->name('institutions.create')
        ->middleware('can:institutions.create');

    Route::put('institutions/{institution}', 'InstitutionController@update')->name('institutions.update')
        ->middleware('can:institutions.edit');

    Route::get('institutions/{institution}', 'InstitutionController@show')->name('institutions.show')
        ->middleware('can:institutions.show');

    Route::delete('institutions/{institution}', 'InstitutionController@destroy')->name('institutions.destroy')
        ->middleware('can:institutions.destroy');

    Route::get('institutions/{institution}/edit', 'InstitutionController@edit')->name('institutions.edit')
        ->middleware('can:institutions.edit');



        //Niveles
    Route::post('levels/store', 'LevelController@store')->name('levels.store')
        ->middleware('can:levels.create');

    Route::get('levels', 'LevelController@index')->name('levels.index')
        ->middleware('can:levels.index');

    Route::get('levels/create', 'LevelController@create')->name('levels.create')
        ->middleware('can:levels.create');

    Route::put('levels/{level}', 'LevelController@update')->name('levels.update')
        ->middleware('can:levels.edit');

    Route::get('levels/{level}', 'LevelController@show')->name('levels.show')
        ->middleware('can:levels.show');

    Route::delete('levels/{level}', 'LevelController@destroy')->name('levels.destroy')
        ->middleware('can:levels.destroy');

    Route::get('levels/{level}/edit', 'LevelController@edit')->name('levels.edit')
        ->middleware('can:levels.edit');



        
        //Oficinas
    Route::post('offices/store', 'OfficeController@store')->name('offices.store')
        ->middleware('can:offices.create');

    Route::get('offices', 'OfficeController@index')->name('offices.index')
        ->middleware('can:offices.index');

    Route::get('offices/create', 'OfficeController@create')->name('offices.create')
        ->middleware('can:offices.create');

    Route::put('offices/{office}/update', 'OfficeController@update')->name('offices.update')
        ->middleware('can:offices.edit');

    Route::get('offices/{office}', 'OfficeController@show')->name('offices.show')
        ->middleware('can:offices.show');

    Route::delete('offices/{office}', 'OfficeController@destroy')->name('offices.destroy')
        ->middleware('can:offices.destroy');

    Route::get('offices/{office}/edit', 'OfficeController@edit')->name('offices.edit')
        ->middleware('can:offices.edit');
    
        Route::get('offices/{office}/roledit', 'OfficeController@roledit')->name('offices.roledit')
        ->middleware('can:offices.edit');

    Route::put('offices/{office}', 'OfficeController@rolupdate')->name('offices.rolupdate')
        ->middleware('can:offices.edit');


                //Cargos
    Route::post('positions/store', 'PositionController@store')->name('positions.store')
        ->middleware('can:positions.create');

    Route::get('positions', 'PositionController@index')->name('positions.index')
        ->middleware('can:positions.index');

    Route::get('positions/create', 'PositionController@create')->name('positions.create')
        ->middleware('can:positions.create');

    Route::put('positions/{position}', 'PositionController@update')->name('positions.update')
        ->middleware('can:positions.edit');

    Route::get('positions/{position}', 'PositionController@show')->name('positions.show')
        ->middleware('can:positions.show');

    Route::delete('positions/{position}', 'PositionController@destroy')->name('positions.destroy')
        ->middleware('can:positions.destroy');

    Route::get('positions/{position}/edit', 'PositionController@edit')->name('positions.edit')
        ->middleware('can:positions.edit');


        //Regimen Laboral
    Route::post('laborals/store', 'LaboralController@store')->name('laborals.store')
        ->middleware('can:laborals.create');

    Route::get('laborals', 'LaboralController@index')->name('laborals.index')
        ->middleware('can:laborals.index');

    Route::get('laborals/create', 'LaboralController@create')->name('laborals.create')
        ->middleware('can:laborals.create');

    Route::put('laborals/{laboral}', 'LaboralController@update')->name('laborals.update')
        ->middleware('can:laborals.edit');

    Route::get('laborals/{laboral}', 'LaboralController@show')->name('laborals.show')
        ->middleware('can:laborals.show');

    Route::delete('laborals/{laboral}', 'LaboralController@destroy')->name('laborals.destroy')
        ->middleware('can:laborals.destroy');

    Route::get('laborals/{laboral}/edit', 'LaboralController@edit')->name('laborals.edit')
        ->middleware('can:laborals.edit');

        //Regimen de Pensiones
    Route::post('regimes/store', 'RegimeController@store')->name('regimes.store')
    ->middleware('can:regimes.create');

    Route::get('regimes', 'RegimeController@index')->name('regimes.index')
        ->middleware('can:regimes.index');

    Route::get('regimes/create', 'RegimeController@create')->name('regimes.create')
        ->middleware('can:regimes.create');

    Route::put('regimes/{regime}', 'RegimeController@update')->name('regimes.update')
        ->middleware('can:regimes.edit');

    Route::get('regimes/{regime}', 'RegimeController@show')->name('regimes.show')
        ->middleware('can:regimes.show');

    Route::delete('regimes/{regime}', 'RegimeController@destroy')->name('regimes.destroy')
        ->middleware('can:regimes.destroy');

    Route::get('regimes/{regime}/edit', 'RegimeController@edit')->name('regimes.edit')
        ->middleware('can:regimes.edit');


        //AFP
    Route::post('afps/store', 'AfpController@store')->name('afps.store')
        ->middleware('can:afps.create');

    Route::get('afps', 'AfpController@index')->name('afps.index')
        ->middleware('can:afps.index');

    Route::get('afps/create', 'AfpController@create')->name('afps.create')
        ->middleware('can:afps.create');

    Route::put('afps/{afp}', 'AfpController@update')->name('afps.update')
        ->middleware('can:afps.edit');

    Route::get('afps/{afp}', 'AfpController@show')->name('afps.show')
        ->middleware('can:afps.show');

    Route::delete('afps/{afp}', 'AfpController@destroy')->name('afps.destroy')
        ->middleware('can:afps.destroy');

    Route::get('afps/{afp}/edit', 'AfpController@edit')->name('afps.edit')
        ->middleware('can:afps.edit');


        //Regimen Remunerativo
    Route::post('remuneratives/store', 'RemunerativeController@store')->name('remuneratives.store')
        ->middleware('can:remuneratives.create');

    Route::get('remuneratives', 'RemunerativeController@index')->name('remuneratives.index')
        ->middleware('can:remuneratives.index');

    Route::get('remuneratives/create', 'RemunerativeController@create')->name('remuneratives.create')
        ->middleware('can:remuneratives.create');

    Route::put('remuneratives/{remunerative}', 'RemunerativeController@update')->name('remuneratives.update')
        ->middleware('can:remuneratives.edit');

    Route::get('remuneratives/{remunerative}', 'RemunerativeController@show')->name('remuneratives.show')
        ->middleware('can:remuneratives.show');

    Route::delete('remuneratives/{remunerative}', 'RemunerativeController@destroy')->name('remuneratives.destroy')
        ->middleware('can:remuneratives.destroy');

    Route::get('remuneratives/{remunerative}/edit', 'RemunerativeController@edit')->name('remuneratives.edit')
        ->middleware('can:remuneratives.edit');


        //Horas de Trabajo
    Route::post('workdays/store', 'WorkdayController@store')->name('workdays.store')
        ->middleware('can:workdays.create');

    Route::get('workdays', 'WorkdayController@index')->name('workdays.index')
        ->middleware('can:workdays.index');

    Route::get('workdays/create', 'WorkdayController@create')->name('workdays.create')
        ->middleware('can:workdays.create');

    Route::put('workdays/{workday}', 'WorkdayController@update')->name('workdays.update')
        ->middleware('can:workdays.edit');

    Route::get('workdays/{workday}', 'WorkdayController@show')->name('workdays.show')
        ->middleware('can:workdays.show');

    Route::delete('workdays/{workday}', 'WorkdayController@destroy')->name('workdays.destroy')
        ->middleware('can:workdays.destroy');

    Route::get('workdays/{workday}/edit', 'WorkdayController@edit')->name('workdays.edit')
        ->middleware('can:workdays.edit');

        //Resoluciones
    Route::post('resolutions/store', 'ResolutionController@store')->name('resolutions.store')
        ->middleware('can:resolutions.create');

    Route::get('resolutions', 'ResolutionController@index')->name('resolutions.index')
        ->middleware('can:resolutions.index');

    Route::get('resolutions/create', 'ResolutionController@create')->name('resolutions.create')
        ->middleware('can:resolutions.create');

    Route::put('resolutions/{resolution}', 'ResolutionController@update')->name('resolutions.update')
        ->middleware('can:resolutions.edit');

    Route::get('resolutions/{resolution}', 'ResolutionController@show')->name('resolutions.show')
        ->middleware('can:resolutions.show');

    Route::delete('resolutions/{resolution}', 'ResolutionController@destroy')->name('resolutions.destroy')
        ->middleware('can:resolutions.destroy');

    Route::get('resolutions/{resolution}/edit', 'ResolutionController@edit')->name('resolutions.edit')
        ->middleware('can:resolutions.edit');


        //Orden de Proyeccion
    Route::post('orders/store', 'OrderController@store')->name('orders.store')
        ->middleware('can:orders.create');

    Route::get('orders', 'OrderController@index')->name('orders.index')
        ->middleware('can:orders.index');

    Route::get('orders/create', 'OrderController@create')->name('orders.create')
        ->middleware('can:orders.create');

    Route::put('orders/{order}', 'OrderController@update')->name('orders.update')
        ->middleware('can:orders.edit');

    Route::get('orders/{order}', 'OrderController@show')->name('orders.show')
        ->middleware('can:orders.show');

    Route::delete('orders/{order}', 'OrderController@destroy')->name('orders.destroy')
        ->middleware('can:orders.destroy');

    Route::get('orders/{order}/edit', 'OrderController@edit')->name('orders.edit')
        ->middleware('can:orders.edit');
    
        Route::get('orders/{order}/pdf', 'OrderController@pdf')->name('orders.pdf')
        ->middleware('can:orders.pdf');

        //Proveido Presupuestal
    Route::post('provideds/store', 'ProvidedController@store')->name('provideds.store')
        ->middleware('can:provideds.create');

    Route::get('provideds', 'ProvidedController@index')->name('provideds.index')
        ->middleware('can:provideds.index');

    Route::get('provideds/create', 'ProvidedController@create')->name('provideds.create')
        ->middleware('can:provideds.create');

    Route::put('provideds/{provided}', 'ProvidedController@update')->name('provideds.update')
        ->middleware('can:provideds.edit');

    Route::get('provideds/{provided}', 'ProvidedController@show')->name('provideds.show')
        ->middleware('can:provideds.show');

    Route::delete('provideds/{provided}', 'ProvidedController@destroy')->name('provideds.destroy')
        ->middleware('can:provideds.destroy');

    Route::get('provideds/{provided}/edit', 'ProvidedController@edit')->name('provideds.edit')
        ->middleware('can:provideds.edit');



});
