<?php 

namespace App\Model;

use DB;

class HopDong
{
	private $table = 'hop_dong';
	public $Ma_hop_dong;
	public $So_hop_dong;
	public $Ngay;
	public $Ma_khach_hang;
	public $ND_hop_dong;
	public $Hinh_thuc_thanh_toan;
	public $Dieu_khoan;
	public $Tong_tien_thanh_toan;
	public $Tien_coc;
	
	public function get_all()
	{
		$array=DB::select("select * from $this->table
			join khach_hang on $this->table.Ma_khach_hang = khach_hang.Ma_khach_hang
			");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(So_hop_dong,Ngay,Ma_khach_hang,ND_hop_dong,Hinh_thuc_thanh_toan,Dieu_khoan,Tong_tien_thanh_toan,Tien_coc)
			values(?,?,?,?,?,?,?,?)",[
				$this->So_hop_dong,
				$this->Ngay,
				$this->Ma_khach_hang,
				$this->ND_hop_dong,
				$this->Hinh_thuc_thanh_toan,
				$this->Dieu_khoan,
				$this->Tong_tien_thanh_toan,
				$this->Tien_coc,
				
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
			So_hop_dong = ?,
			Ngay = ?,
			Ma_khach_hang = ?,
			ND_hop_dong = ?,
			Hinh_thuc_thanh_toan = ?,
			Dieu_khoan = ?,
			Tong_tien_thanh_toan = ?,
			Tien_coc = ?
			where Ma_hop_dong = ?
			",[
				$this->So_hop_dong,
				$this->Ngay,
				$this->Ma_khach_hang,
				$this->ND_hop_dong,
				$this->Hinh_thuc_thanh_toan,
				$this->Dieu_khoan,
				$this->Tong_tien_thanh_toan,
				$this->Tien_coc,
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