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

Route::middleware('auth')->group(function(){
	Route::prefix('reference')->namespace('Reference')->group(function(){
		Route::prefix('golongan')->group(function(){
			Route::get('/','GolonganController@index')->name('reference.golongan.index');
			Route::get('create','GolonganController@create')->name('reference.golongan.create');
			Route::get('edit/{golongan}','GolonganController@edit')->name('reference.golongan.edit');
			Route::post('insert','GolonganController@store')->name('reference.golongan.insert');
			Route::put('update','GolonganController@update')->name('reference.golongan.update');
			Route::delete('delete','GolonganController@delete')->name('reference.golongan.delete');
		});

		Route::prefix('eselon')->group(function(){
			Route::get('/','EselonController@index')->name('reference.eselon.index');
			Route::get('create','EselonController@create')->name('reference.eselon.create');
			Route::get('edit/{eselon}','EselonController@edit')->name('reference.eselon.edit');
			Route::post('insert','EselonController@store')->name('reference.eselon.insert');
			Route::put('update','EselonController@update')->name('reference.eselon.update');
			Route::delete('delete','EselonController@delete')->name('reference.eselon.delete');
		});

		Route::prefix('employee')->group(function(){
			Route::get('/','EmployeeController@index')->name('reference.employee.index');
			Route::get('create','EmployeeController@create')->name('reference.employee.create');
			Route::get('edit/{employee}','EmployeeController@edit')->name('reference.employee.edit');
			Route::post('insert','EmployeeController@store')->name('reference.employee.insert');
			Route::put('update','EmployeeController@update')->name('reference.employee.update');
			Route::delete('delete','EmployeeController@delete')->name('reference.employee.delete');
		});

		Route::prefix('group')->group(function(){
			Route::get('/','GroupController@index')->name('reference.group.index');
			Route::get('create','GroupController@create')->name('reference.group.create');
			Route::get('edit/{group}','GroupController@edit')->name('reference.group.edit');
			Route::get('show/{group}','GroupController@show')->name('reference.group.show');
			Route::post('insert','GroupController@store')->name('reference.group.insert');
			Route::put('update','GroupController@update')->name('reference.group.update');
			Route::delete('delete','GroupController@destroy')->name('reference.group.delete');

			Route::get('show/{group}/create','SubGroupController@create')->name('reference.group.sub.create');
			Route::get('show/{group}/edit/{sub}','SubGroupController@edit')->name('reference.group.sub.edit');
			Route::get('show/{group}/staff/{sub}','SubGroupController@show')->name('reference.group.sub.show');
			Route::post('show/{group}/insert','SubGroupController@store')->name('reference.group.sub.insert');
			Route::put('show/{group}/update','SubGroupController@update')->name('reference.group.sub.update');
			Route::delete('show/{group}/delete','SubGroupController@destroy')->name('reference.group.sub.delete');

			Route::get('show/{group}/staff/{sub}/create','SubGroupStaffController@create')->name('reference.group.sub.staff.create');
			Route::post('show/{group}/staff/{sub}/insert','SubGroupStaffController@store')->name('reference.group.sub.staff.insert');
			Route::delete('show/{group}/staff/{sub}/delete','SubGroupStaffController@destroy')->name('reference.group.sub.staff.delete');
		});

		Route::prefix('program')->group(function(){
			Route::get('/','ProgramController@index')->name('reference.program.index');
			Route::get('create','ProgramController@create')->name('reference.program.create');
			Route::get('edit/{program}','ProgramController@edit')->name('reference.program.edit');
			Route::post('insert','ProgramController@store')->name('reference.program.insert');
			Route::put('update','ProgramController@update')->name('reference.program.update');
			Route::delete('delete','ProgramController@delete')->name('reference.program.delete');
		});

		Route::prefix('kegiatan')->group(function(){
			Route::get('/','KegiatanController@index')->name('reference.kegiatan.index');
			Route::get('create','KegiatanController@create')->name('reference.kegiatan.create');
			Route::get('edit/{kegiatan}','KegiatanController@edit')->name('reference.kegiatan.edit');
			Route::post('insert','KegiatanController@store')->name('reference.kegiatan.insert');
			Route::put('update','KegiatanController@update')->name('reference.kegiatan.update');
			Route::delete('delete','KegiatanController@delete')->name('reference.kegiatan.delete');
		});

		Route::prefix('rekening')->group(function(){
			Route::get('/','RekeningController@index')->name('reference.rekening.index');
			Route::get('create','RekeningController@create')->name('reference.rekening.create');
			Route::get('edit/{rekening}','RekeningController@edit')->name('reference.rekening.edit');
			Route::post('insert','RekeningController@store')->name('reference.rekening.insert');
			Route::put('update','RekeningController@update')->name('reference.rekening.update');
			Route::delete('delete','RekeningController@delete')->name('reference.rekening.delete');
		});
	});

	Route::prefix('users')->group(function(){
		Route::get('/','UserController@index')->name('users.index');
		Route::get('create','UserController@create')->name('users.create');
		Route::get('edit/{user}','UserController@edit')->name('users.edit');
		Route::post('insert','UserController@store')->name('users.insert');
		Route::put('update','UserController@update')->name('users.update');
		Route::delete('delete','UserController@delete')->name('users.delete');
	});

	Route::prefix('setting')->group(function(){
		Route::get('/','SettingController@index')->name('setting.index');
		Route::put('update','SettingController@update')->name('setting.update');
	});
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
