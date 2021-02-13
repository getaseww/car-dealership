<?php

Route::get('/contact','ContactController@create')->name('contact.create');
Route::post('/contact/store','ContactController@store')->name('contact.store');
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/','HomeController@index')->name('home');
Route::get('/car/show/{id}','CarController@show')->name('car.show');
Route::get('/cars','CarController@cars')->name('cars');

Route::get('/house/show/{id}','HouseController@show')->name('house.show');
Route::get('/houses','HouseController@houses')->name('houses');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/car/create','CarController@create')->name('car.create');
    Route::post('/car/store','CarController@store')->name('car.store');
    Route::get('/my-cars','CarController@index')->name('my-cars');
    Route::get('/car/edit/{id}','CarController@edit')->name('car.edit');
    Route::post('/car/update/{id}','CarController@update')->name('car.update');
    Route::get('/car/destroy/{id}','CarController@destroy')->name('car.destroy');
    Route::get('/car/pending','CarController@pending')->name('car.pending');

    Route::get('/house/create','HouseController@create')->name('house.create');
    Route::post('/house/store','HouseController@store')->name('house.store');
    Route::get('/my-houses','HouseController@index')->name('my-houses');
    Route::get('/house/edit/{id}','HouseController@edit')->name('house.edit');
    Route::post('/house/update/{id}','HouseController@update')->name('house.update');
    Route::get('/house/destroy/{id}','HouseController@destroy')->name('house.destroy');
    Route::get('/house/pending','HouseController@pending')->name('house.pending');

    Route::get('/profile','ProfileController@index')->name('profile');

    Route::get('/dashboard','HomeController@userdash')->name('user.dashboard');
}); 

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');
    Route::get('messages','ContactController@index')->name('admin.messages');

    Route::get('/car/create','CarController@create')->name('admin.car.create');
    Route::post('/car/store','CarController@store')->name('admin.car.store');
    Route::get('/cars','Admin\CarsController@index')->name('admin.cars');
    Route::get('/car/show/{id}','Admin\CarsController@show')->name('admin.car.show');
    Route::get('/car/approve/{id}','Admin\CarsController@approve')->name('admin.car.approve');
    Route::get('/car/edit/{id}','CarController@edit')->name('admin.car.edit');
    Route::Post('/car/update/{id}','CarController@update')->name('admin.car.update');
    Route::get('/car/destroy/{id}','CarController@destroy')->name('admin.car.destroy');
    Route::get('/car/pending','Admin\CarsController@pending')->name('admin.car.pending');

    Route::get('/house/create','HouseController@create')->name('admin.house.create');
    Route::post('/house/store','HouseController@store')->name('admin.house.store');
    Route::get('/houses','Admin\HousesController@index')->name('admin.houses');
    Route::get('/house/show/{id}','Admin\HousesController@show')->name('admin.house.show');
    Route::get('/cahouser/approve/{id}','Admin\HousesController@approve')->name('admin.house.approve');
    Route::get('/house/edit/{id}','HouseController@edit')->name('admin.house.edit');
    Route::Post('/house/update/{id}','HouseController@update')->name('admin.house.update');
    Route::get('/house/destroy/{id}','HouseController@destroy')->name('admin.house.destroy');
    Route::get('/house/pending','Admin\HousesController@pending')->name('admin.house.pending');


    Route::get('/users','Admin\UsersController@index')->name('admin.users');
    Route::get('/user/destroy/{id}','Admin\UsersController@destroy')->name('admin.user.destroy');
});

/*Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');
});*/