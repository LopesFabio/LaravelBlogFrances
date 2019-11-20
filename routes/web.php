<?php

$this->put('notification-tous-lire', 'NotificationController@MarquerLire');
$this->put('notification-lire', 'NotificationController@lire');
$this->get('notifications', 'NotificationController@notifications')->name('notifications');

//Routes des publications
$this->post('commentaire', 'Publiers\commentaireController@store')->name('commentaire.store');
$this->resource('publiers', 'Publiers\PublierController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
