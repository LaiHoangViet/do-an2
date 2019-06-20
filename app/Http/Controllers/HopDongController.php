<?php

namespace App\Http\Controllers;

use Request;
use App\Model\HopDong;
use App\Model\Xe;
use App\Model\KhachHang;

class HopDongController extends Controller
{
    public function hop_dong_view_all()
    {
        $hop_dong       = new HopDong();
        $array_hop_dong = $hop_dong->get_all();
        
        return view('HopDong/hop_dong_view_all',[
            'array_hop_dong' => $array_hop_dong
        ]);
    }
    public function hop_dong_view_insert()
    {
        
        $khach_hang       = new KhachHang();
        $array_khach_hang = $khach_hang->get_all();

        return view('HopDong/hop_dong_view_insert',[
            'array_khach_hang' => $array_khach_hang]
        );
    }
    public function hop_dong_process_insert()
    {
        $hop_dong            = new HopDong();
        $hop_dong->So_hop_dong        = Request::get('So_hop_dong');
        $hop_dong->Ngay       = Request::get('Ngay');
        $hop_dong->Ma_khach_hang  = Request::get('Ma_khach_hang');
        $hop_dong->ND_hop_dong        = Request::get('ND_hop_dong');
        $hop_dong->Hinh_thuc_thanh_toan       = Request::get('Hinh_thuc_thanh_toan');
        $hop_dong->Dieu_khoan  = Request::get('Dieu_khoan');
        $hop_dong->Tong_tien_thanh_toan       = Request::get('Tong_tien_thanh_toan');
        $hop_dong->Tien_coc  = Request::get('Tien_coc');
        $hop_dong->insert();

        return redirect()->route('hop_dong.hop_dong_view_all');
    }
    public function hop_dong_view_update($id)
    {
        $hop_dong     = new HopDong();
        $hop_dong->Ma_hop_dong = $id;
        $hop_dong     = $hop_dong->get_one();

        $khach_hang       = new KhachHang();
        $array_khach_hang = $khach_hang->get_all();

        return view('HopDong/hop_dong_view_update',[
            'hop_dong' => $hop_dong,
            'array_khach_hang' => $array_khach_hang
        ]);
    }
    public function hop_dong_process_update($id)
    {
        $hop_dong            = new HopDong();
        $hop_dong->Ma_hop_dong        = $id;
        $hop_dong->So_hop_dong        = Request::get('So_hop_dong');
        $hop_dong->Ngay       = Request::get('Ngay');
        $hop_dong->Ma_khach_hang  = Request::get('Ma_khach_hang');
        $hop_dong->ND_hop_dong        = Request::get('ND_hop_dong');
        $hop_dong->Hinh_thuc_thanh_toan       = Request::get('Hinh_thuc_thanh_toan');
        $hop_dong->Dieu_khoan  = Request::get('Dieu_khoan');
        $hop_dong->Tong_tien_thanh_toan       = Request::get('Tong_tien_thanh_toan');
        $hop_dong->Tien_coc  = Request::get('Tien_coc');
        $hop_dong->update();

        return redirect()->route('hop_dong.hop_dong_view_all');
    }
    public function hop_dong_delete($id)
    {
        $hop_dong     = new HopDong();
        $hop_dong->Ma_hop_dong = $id;
        $hop_dong->delete();

        return redirect()->route('hop_dong.hop_dong_view_all');
    }
}
