<?php 

namespace App\Model;

use DB;

class DatXe
{
    private $table = 'dat_xe';
    public $Ngay;
    public $Ma_khach_hang;
    public $Ma_xe;
    public $So_CMT;
    public $Sdt;
    public $Dia_chi;
    public $So_TK;
    public $Ngan_hang;
    public $Ngay_lay;
    public $Ngay_tra;
    
    public function get_all()
    {
        $array = DB::select("select * from $this->table
            join khach_hang on $this->table.Ma_khach_hang = khach_hang.Ma_khach_hang 
            join xe on $this->table.Ma_xe = xe.Ma_xe");
        return $array;
    }
    public function insert()
    {
        DB::insert("insert into $this->table(Ngay,Ma_khach_hang,Ma_xe,So_CMT,Sdt,Dia_chi,So_TK,Ngan_hang,Ngay_lay,Ngay_tra)
            values(?,?,?,?,?,?,?,?,?,?)",[
                $this->Ngay,
                $this->Ma_khach_hang,
                $this->Ma_xe,
                $this->So_CMT,
                $this->Sdt,
                $this->Dia_chi,
                $this->So_TK,
                $this->Ngan_hang,
                $this->Ngay_lay,
                $this->Ngay_tra,
                
            ]);
    }

}