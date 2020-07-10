<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);




});
//client 
  Route::resource('penalite', 'PenaliteController', ['only' => ['index', 'store','create']]);

  Route::get('penalite/{id}', 'PenaliteController@destroy')->name('client.destroy');

  Route::get('/penalite/edit/{id}', ['uses' =>'PenaliteController@edit','as' => 'penalite.edit']);


Route::post('/penalite/update/{id}', ['uses' =>'PenaliteController@update','as' => 'penalite.update']);
 
//Reporting
Route::resource('reporting', 'ReportingController', ['only' => ['index', 'store','create']]);


  Route::get('statistique', 'ReportingController@statistique')->name('statistique.index');




//caisse
Route::resource('caisse', 'CaisseController', ['only' => ['index', 'store','create']]);
Route::get('caisse/{id}', 'CaisseController@edit')->name('caisse.edit');


Route::get('caisse/print-pdf', 'CaisseController@printPDF')->name('customer.printpdf');

//rout export excell
Route::get('caisse/{type}', 'CaisseController@exportFile')->name('export.file');
//route PDF


//route PDF
Route::get('caisse/print-pdf', 'CaisseController@printPDF')->name('customer.printpdf');


 Route::get('pdf/{id}', 'CaisseController@pdf')->name('pdf');;