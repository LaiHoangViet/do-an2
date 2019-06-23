<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Admin;
use App\Model\KhachHangLogin;
use App\Model\KhachHang;
use App\Model\LoaiXe;
use DB;
use Request;
use Session;

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

    		return redirect()->route('layer');
    	}
    	return redirect()->route('khach_hang_view_login');
    }
    public function khach_hang_logout()
    {
        // Session::forget('ma_admin');

        Session::flush();

        return redirect()->route('khach_hang_view_login');
    }

    public function Content()
    {
        $xe = DB::table('xe')->select('Ma_xe','Ten_xe','Anh','Hang_xe','Gia','Ma_loai_xe')->orderBy('Ma_xe','DESC')->skip(0)->take(4)->get();
        return view('layer.Content',compact('xe'));
    }


    public function tim_kiem(Request $request)
    {
        $loai_xe = loai_xe::where('Ten_loai_xe','like','%'.$request->key.'%')
        ->orWhere('unit_price',$request->key)
        ->get();
        return view('tim_kiem',compact('loai_xe'));
    }

    public function the_loai()
    {
        return view('layer.the_loai');
    }

    public function gioi_thieu()
    {
        return view('gioi_thieu');
    }


}
