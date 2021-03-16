<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UserController@index')->name('your-profile')->middleware('auth');
Route::post('/profile', 'UserController@profile_update')->name('profile.update');

Route::get('/qrCode/{id}', 'UserController@show');

Route::get('/path',  function() {
    return public_path();
} );

Route::get('Print_qr','UserController@print')->middleware('auth');

