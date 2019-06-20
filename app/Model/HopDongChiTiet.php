<?php 

namespace App\Model;

use DB;

class HopDongChiTiet
{
	private $table = 'hop_dong_chi_tiet';
	public $Ma_hop_dong;
	public $Ma_xe;
	public $Gia;
	public $Ngay_nhan;
	public $Ngay_tra;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table
			join hop_dong on $this->table.Ma_hop_dong = hop_dong.Ma_hop_dong 
			join xe on $this->table.Ma_xe = xe.Ma_xe");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ma_hop_dong,Ma_xe,Gia,Ngay_nhan,Ngay_tra)
			values(?,?,?,?,?)",[
				$this->Ma_hop_dong,
				$this->Ma_xe,
				$this->Gia,
				$this->Ngay_nhan,
				$this->Ngay_tra,
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_hop_dong = ?
			limit 1",[
				$this->Ma_hop_dong
			]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update $this->table
			set
			Ma_hop_dong = ?,
			Ma_xe = ?,
			Gia = ?,
			Ngay_nhan = ?,
			Ngay_tra = ?
			where Ma_hop_dong = ?
			",[
				$this->Ma_hop_dong,
				$this->Ma_xe,
				$this->Gia,
				$this->Ngay_nhan,
				$this->Ngay_tra,
				$this->Ma_hop_dong
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_hop_dong = ?",[
				$this->Ma_hop_dong
			]);
	}
}