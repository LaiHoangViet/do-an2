<?php

namespace App\Http\Controllers;

use Request;
use App\Model\HopDongChiTiet;
use App\Model\HopDong;
use App\Model\Xe;

class HopDongChiTietController extends Controller
{
    public function hop_dong_chi_tiet_view_all()
    {
        $hop_dong_chi_tiet       = new HopDongChiTiet();
        $array_hop_dong_chi_tiet = $hop_dong_chi_tiet->get_all();
        
        return view('HopDongChiTiet/hop_dong_chi_tiet_view_all',[
            'array_hop_dong_chi_tiet' => $array_hop_dong_chi_tiet
        ]);
    }
    public function hop_dong_chi_tiet_view_insert()
    {
        $hop_dong       = new HopDong();
        $array_hop_dong = $hop_dong->get_all();
        $xe       = new Xe();
        $array_xe = $xe->get_all();

        return view('HopDongChiTiet/hop_dong_chi_tiet_view_insert',[
            'array_xe' => $array_xe,
            'array_hop_dong' => $array_hop_dong
        ]);
    }
    public function hop_dong_chi_tiet_process_insert()
    {
        $hop_dong_chi_tiet            = new HopDongChiTiet();
        $hop_dong_chi_tiet->Ma_hop_dong        = Request::get('Ma_hop_dong');
        $hop_dong_chi_tiet->Ma_xe        = Request::get('Ma_xe');
        $hop_dong_chi_tiet->Gia       = Request::get('Gia');
        $hop_dong_chi_tiet->Ngay_nhan       = Request::get('Ngay_nhan');
        $hop_dong_chi_tiet->Ngay_tra       = Request::get('Ngay_tra');
        $hop_dong_chi_tiet->insert();

        return redirect()->route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all');
    }
    public function hop_dong_chi_tiet_view_update($id)
    {
        $hop_dong_chi_tiet     = new HopDongChiTiet();
        $hop_dong_chi_tiet->Ma_hop_dong = $id;
        $hop_dong_chi_tiet     = $hop_dong_chi_tiet->get_one();

        $hop_dong = new HopDong();
        $array_hop_dong = $hop_dong->get_all();
        $xe       = new Xe();
        $array_xe = $xe->get_all();
        return view('HopDongChiTiet/hop_dong_chi_tiet_view_update',[
            'hop_dong_chi_tiet' => $hop_dong_chi_tiet,
            'array_hop_dong' => $array_hop_dong,
            'array_xe' => $array_xe
        ]);
    }
    public function hop_dong_chi_tiet_process_update($id)
    {
        $hop_dong_chi_tiet            = new HopDongChiTiet();
        $hop_dong_chi_tiet->Ma_hop_dong        = $id;
        $hop_dong_chi_tiet->Ma_hop_dong        = Request::get('Ma_hop_dong');
        $hop_dong_chi_tiet->Ma_xe        = Request::get('Ma_xe');
        $hop_dong_chi_tiet->Gia       = Request::get('Gia');
        $hop_dong_chi_tiet->Ngay_nhan       = Request::get('Ngay_nhan');
        $hop_dong_chi_tiet->Ngay_tra       = Request::get('Ngay_tra');
        $hop_dong_chi_tiet->update();

        return redirect()->route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all');
    }
    public function hop_dong_chi_tiet_delete($id)
    {
        $hop_dong_chi_tiet     = new HopDongChiTiet();
        $hop_dong_chi_tiet->Ma_hop_dong = $id;
        $hop_dong_chi_tiet->delete();

        return redirect()->route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all');
    }
}
