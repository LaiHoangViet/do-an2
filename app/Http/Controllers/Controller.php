<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Admin;
use App\Model\KhachHangLogin;
use App\Model\KhachHang;
use App\Model\Xe;
use App\Model\LoaiXe;
use DB;
use Request;
use Session;
use Storage;

class Controller extends BaseController
{
    public function layer()
    {
    	return view('layer.master');
    }

    public function layerAdmin()
    {
    	return view('layerAdmin.Admin_master');
    }


    public function Admin_view_login()
    {
    	return view('Admin_view_login');
    }
    public function Admin_process_login()
    {
    	$Admin = new Admin();
    	$Admin->Email = Request::get('Email');
    	$Admin->Mat_khau = Request::get('Mat_khau');
    	$Admin = $Admin->get_one();

    	if (count($Admin)==1) {
    		Session::put('Ma_admin',$Admin[0]->Ma_admin);
    		Session::put('Ten_dang_nhap',$Admin[0]->Ten_dang_nhap);

    		return redirect()->route('layerAdmin');
    	}
    	return redirect()->route('Admin_view_login');
    }
    public function Admin_logout()
    {
    	Session::flush();
    	 return redirect()->route('Admin_view_login');
    }


        public function khach_hang_view_login()
    {
    	return view('khach_hang_view_login');
    }
    public function khach_hang_process_login()
    {
    	$khach_hang = new KhachHangLogin();
    	$khach_hang->Email = Request::get('Email');
    	$khach_hang->Mat_khau = Request::get('Mat_khau');
    	$khach_hang = $khach_hang->get_one();

    	if (count($khach_hang)==1) {
    		Session::put('Ma_khach_hang',$khach_hang[0]->Ma_khach_hang);
    		Session::put('Ten_dang_nhap',$khach_hang[0]->Ten_dang_nhap);

    		return redirect()->route('ta_ca_xe');
    	}
    	return redirect()->route('khach_hang_view_login');
    }
    public function khach_hang_logout()
    {
        // Session::forget('ma_admin');

        Session::flush();

        return redirect()->route('khach_hang_view_login');
    }

    public function ta_ca_xe()
    {
        $xe = new Xe();
        $array_xe = $xe->get_all();

        return view('layer.ta_ca_xe',[
            'array_xe' => $array_xe
        ]);
    }

    public function the_loai()
    {
        return view('layer.the_loai');
    }

    public function gioi_thieu()
    {
        return view('gioi_thieu');
    }


    public function view_file_upload()
    {
        return view('view_file_upload');
    }
    public function process_file_upload()
    {
        $file = Request::file('Anh');
        $path = Storage::disk('public')->put('',$file);

        $xe =new Xe();
        $xe->Ma_xe=1;
        $xe->Anh=$path;
        $xe->update_anh();
    }
    public function view()
    {
        $xe =new Xe();
        $xe->Ma_xe=$id;
        $xe = $xe->get_one();
        return view('view_one',compact(xe));
    }




}
