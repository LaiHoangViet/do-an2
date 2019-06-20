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
Route::get('', 'Controller@layer');




Route::group(['prefix' => 'khach_hang'],function(){
	Route::get('', 'KhachHangController@khach_hang_view_all')
	->name('khach_hang.khach_hang_view_all');

	Route::get('khach_hang_view_insert', 'KhachHangController@khach_hang_view_insert')
	->name('khach_hang.khach_hang_view_insert');

	Route::post('khach_hang_process_insert', 'KhachHangController@khach_hang_process_insert')
	->name('khach_hang.khach_hang_process_insert');

	Route::get('khach_hang_view_update/{id}', 'KhachHangController@khach_hang_view_update')
	->name('khach_hang.khach_hang_view_update');

	Route::post('khach_hang_process_update/{id}', 'KhachHangController@khach_hang_process_update')
	->name('khach_hang.khach_hang_process_update');

	Route::get('khach_hang_delete/{id}', 'KhachHangController@khach_hang_delete')
	->name('khach_hang.khach_hang_delete');
});

Route::group(['prefix' => 'Admin'],function(){
	Route::get('', 'AdminController@Admin_view_all')
	->name('Admin.Admin_view_all');

	Route::get('Admin_view_insert', 'AdminController@Admin_view_insert')
	->name('Admin.Admin_view_insert');

	Route::post('Admin_process_insert', 'AdminController@Admin_process_insert')
	->name('Admin.Admin_process_insert');

	Route::get('Admin_view_update/{id}', 'AdminController@Admin_view_update')
	->name('Admin.Admin_view_update');
	
	Route::post('Admin_process_update/{id}', 'AdminController@Admin_process_update')
	->name('Admin.Admin_process_update');

	Route::get('Admin_delete/{id}', 'AdminController@Admin_delete')
	->name('Admin.Admin_delete');
});

Route::group(['prefix' => 'loai_xe'],function(){
	Route::get('', 'LoaiXeController@loai_xe_view_all')
	->name('loai_xe.loai_xe_view_all');

	Route::get('loai_xe_view_insert', 'LoaiXeController@loai_xe_view_insert')
	->name('loai_xe.loai_xe_view_insert');

	Route::post('loai_xe_process_insert', 'LoaiXeController@loai_xe_process_insert')
	->name('loai_xe.loai_xe_process_insert');

	Route::get('loai_xe_view_update/{id}', 'LoaiXeController@loai_xe_view_update')
	->name('loai_xe.loai_xe_view_update');
	Route::post('loai_xe_process_update/{id}', 'LoaiXeController@loai_xe_process_update')
	->name('loai_xe.loai_xe_process_update');

	Route::get('loai_xe_delete/{id}', 'LoaiXeController@loai_xe_delete')
	->name('loai_xe.loai_xe_delete');
});

Route::group(['prefix' => 'xe'],function(){
	Route::get('', 'XeController@xe_view_all')
	->name('xe.xe_view_all');

	Route::get('xe_view_insert', 'XeController@xe_view_insert')
	->name('xe.xe_view_insert');

	Route::post('xe_process_insert', 'XeController@xe_process_insert')
	->name('xe.xe_process_insert');

	Route::get('xe_view_update/{id}', 'XeController@xe_view_update')
	->name('xe.xe_view_update');
	Route::post('xe_process_update/{id}', 'XeController@xe_process_update')
	->name('xe.xe_process_update');

	Route::get('xe_delete/{id}', 'XeController@xe_delete')
	->name('xe.xe_delete');
});

Route::group(['prefix' => 'hop_dong'],function(){
	Route::get('', 'HopDongController@hop_dong_view_all')
	->name('hop_dong.hop_dong_view_all');

	Route::get('hop_dong_view_insert', 'HopDongController@hop_dong_view_insert')
	->name('hop_dong.hop_dong_view_insert');

	Route::post('hop_dong_process_insert', 'HopDongController@hop_dong_process_insert')
	->name('hop_dong.hop_dong_process_insert');

	Route::get('hop_dong_view_update/{id}', 'HopDongController@hop_dong_view_update')
	->name('hop_dong.hop_dong_view_update');
	Route::post('hop_dong_process_update/{id}', 'HopDongController@hop_dong_process_update')
	->name('hop_dong.hop_dong_process_update');

	Route::get('hop_dong_delete/{id}', 'HopDongController@hop_dong_delete')
	->name('hop_dong.hop_dong_delete');
});

Route::group(['prefix' => 'hop_dong_chi_tiet'],function(){
	Route::get('', 'HopDongChiTietController@hop_dong_chi_tiet_view_all')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all');

	Route::get('hop_dong_chi_tiet_view_insert', 'HopDongChiTietController@hop_dong_chi_tiet_view_insert')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_view_insert');

	Route::post('hop_dong_chi_tiet_process_insert', 'HopDongChiTietController@hop_dong_chi_tiet_process_insert')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_process_insert');

	Route::get('hop_dong_chi_tiet_view_update/{id}', 'HopDongChiTietController@hop_dong_chi_tiet_view_update')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_view_update');
	
	Route::post('hop_dong_chi_tiet_process_update/{id}', 'HopDongChiTietController@hop_dong_chi_tiet_process_update')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_process_update');

	Route::get('hop_dong_chi_tiet_delete/{id}', 'HopDongChiTietController@hop_dong_chi_tiet_delete')
	->name('hop_dong_chi_tiet.hop_dong_chi_tiet_delete');
});

