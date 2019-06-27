<?php
use Illuminate\Support\Facades\Input;
use App\Model\Xe;

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
Route::get('pagination', 'Controller@phan_trang');

Route::get('layer', 'Controller@layer')->name("layer");
Route::get('the_loai', 'Controller@the_loai')->name("the_loai");


Route::get('view_file_upload', 'Controller@view_file_upload');
Route::post('process_file_upload', 'Controller@process_file_upload')->name('process_file_upload');
Route::get('view_one', 'Controller@view_one');

Route::get('chi_tiet_xe/{id}', 'Controller@chi_tiet_xe')->name('chi_tiet_xe');


Route::get("ta_ca_xe", "Controller@ta_ca_xe")
->name("ta_ca_xe");

Route::post('tim_kiem', function(){
	$key = Input::get('key');
	if ($key != "") {
	
	    $xe = DB::table('xe')
	    ->join('loai_xe','xe.Ma_loai_xe','loai_xe.Ma_loai_xe')
	    ->orWhere('Ten_xe','LIKE','%'.$key.'%')
	    ->orWhere('Ten_loai_xe','LIKE','%'.$key.'%')
	    ->get();
    if(count($xe) > 0)
        return view('layer.ta_ca_xe')->withDetails($xe)->withQuery ( $key );
    }
    return view ('layer.ta_ca_xe')->withMessage('No Details found. Try to search again !');
});

Route::get("gioi_thieu", "Controller@gioi_thieu")
->name("gioi_thieu");

Route::get("dat_hang", "Controller@dat_hang")
->name("dat_hang");
Route::post("process_dat_hang", "Controller@process_dat_hang")
->name("process_dat_hang");


Route::get("Admin_view_login", "Controller@Admin_view_login")
->name("Admin_view_login");
Route::post("Admin_process_login", "Controller@Admin_process_login")
->name("Admin_process_login");


Route::get("khach_hang_view_login", "Controller@khach_hang_view_login")
->name("khach_hang_view_login");
Route::post("khach_hang_process_login", "Controller@khach_hang_process_login")
->name("khach_hang_process_login");


Route::group(["prefix" => "khach_hang", "middleware" => "Check_khach_hang"],function(){



Route::get("khach_hang_logout", "Controller@khach_hang_logout")
	->name("khach_hang_logout");
});


Route::get("sign_up", "SignUpController@sign_up")
->name("sign_up");
Route::post("process_sign_up", "SignUpController@process_sign_up")
->name("process_sign_up");	

Route::get("Admin_sign_up", "SignUpController@Admin_sign_up")
->name("Admin_sign_up");
Route::post("Admin_process_sign_up", "SignUpController@Admin_process_sign_up")
->name("Admin_process_sign_up");	


Route::group(["prefix" => "admin", "middleware" => "CheckAdmin"],function(){


	Route::get('layerAdmin', 'Controller@layerAdmin')->name("layerAdmin");
	
	
	Route::get("Admin_logout", "Controller@Admin_logout")
	->name("Admin_logout");	


Route::group(['prefix' => 'Admin'],function(){
	Route::get('', 'AdminController@Admin_view_all')
	->name('Admin.Admin_view_all');

	Route::get('Admin_view_insert', 'AdminController@Admin_view_insert')
	->name('Admin.Admin_view_insert');

	Route::post('Admin_process_insert', 'AdminController@Admin_process_insert')
	->name('Admin.Admin_process_insert');


});

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


Route::group(['prefix' => 'dat_xe'],function(){
	Route::get('', 'DatXeController@dat_xe_view_all')
	->name('dat_xe.dat_xe_view_all');

	Route::get('dat_xe_view_insert', 'DatXeController@dat_xe_view_insert')
	->name('dat_xe.dat_xe_view_insert');

	Route::post('dat_xe_process_insert', 'DatXeController@dat_xe_process_insert')
	->name('dat_xe.dat_xe_process_insert');
});

Route::group(['prefix' => 'sua_chua'],function(){
	Route::get('', 'SuaChuaController@sua_chua_view_all')
	->name('sua_chua.sua_chua_view_all');

	Route::get('sua_chua_view_insert', 'SuaChuaController@sua_chua_view_insert')
	->name('sua_chua.sua_chua_view_insert');

	Route::post('sua_chua_process_insert', 'SuaChuaController@sua_chua_process_insert')
	->name('sua_chua.sua_chua_process_insert');
});
});
