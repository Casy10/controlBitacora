<?php
// connect with corresponding model.
Route::model('profesor', 'Profesor');
//route for index page, call index method of controller
Route::get('/', 'ProfesoresController@index');
//route for create employee page.
Route::get('/create', 'ProfesoresController@create');
//route for edit employee page.
Route::get('/edit/{profesor}', 'ProfesoresController@edit');
//route for delete emplooyee page
Route::get('/delete/{profesor}', 'ProfesoresController@delete');
// route for form submission call handleCreate method.
Route::post('/create', 'ProfesoresController@handleCreate');
//route to handle edit form submission
Route::post('/edit', 'ProfesoresController@handleEdit');
//route to handle delete.
Route::post('/delete', 'ProfesoresController@handleDelete');
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));