<?php

namespace App\Http\Controllers;

use Request;
use App\Model\DatXe;
use App\Model\KhachHang;
use App\Model\Xe;


class DatXeController extends Controller
{
    public function dat_xe_view_all()
    {
        $dat_xe       = new DatXe();
        $array_dat_xe = $dat_xe->get_all();
        
        return view('DatXe.dat_xe_view_all',[
            'array_dat_xe' => $array_dat_xe
        ]);
    }
    public function dat_xe_view_insert()
    {
        $khach_hang       = new KhachHang();
        $array_khach_hang = $khach_hang->get_all();
        $xe       = new Xe();
        $array_xe = $xe->get_all();

        return view('DatXe.dat_xe_view_insert',[
            'array_xe' => $array_xe,
            'array_khach_hang' => $array_khach_hang
        ]);
    }
    public function dat_xe_process_insert()
    {
        $dat_xe = new DatXe();
        $dat_xe->Ngay = Request::get('Ngay');
        $dat_xe->Ma_khach_hang = Request::get('Ma_khach_hang');
        $dat_xe->Ma_xe = Request::get('Ma_xe');
        $dat_xe->So_CMT = Request::get('So_CMT');
        $dat_xe->Sdt = Request::get('Sdt');
        $dat_xe->Dia_chi = Request::get('Dia_chi');
        $dat_xe->So_TK = Request::get('So_TK');
        $dat_xe->Ngan_hang = Request::get('Ngan_hang');
        $dat_xe->Ngay_lay = Request::get('Ngay_lay');
        $dat_xe->Ngay_tra = Request::get('Ngay_tra');
        $dat_xe->insert();

        return redirect()->route('dat_xe.dat_xe_view_all');
    }

}
