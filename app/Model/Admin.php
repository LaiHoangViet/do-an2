<?php 

namespace App\Model;

use DB;

class Admin
{
	private $table = 'admin';
	public $Ma_admin;
	public $Ten_dang_nhap;
	public $Mat_khau;
	public $Gioi_tinh;
	public $Nam_sinh;
	public $Sdt;
	public $Dia_chi;
	public $Email;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ten_dang_nhap,Mat_khau,Gioi_tinh,Nam_sinh,Sdt,Dia_chi,Email)
			values(?,?,?,?,?,?,?)",[
				$this->Ten_dang_nhap,
				$this->Mat_khau,
				$this->Gioi_tinh,
				$this->Nam_sinh,
				$this->Sdt,
				$this->Dia_chi,
				$this->Email,
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_admin = ?
			limit 1",[
				$this->Ma_admin
			]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update $this->table
			set
			Ten_dang_nhap = ?,
			Mat_khau = ?,
			Gioi_tinh = ?,
			Nam_sinh = ?,
			Sdt = ?,
			Dia_chi = ?,
			Email = ?
			where Ma_admin = ?
			",[
				$this->Ten_dang_nhap,
				$this->Mat_khau,
				$this->Gioi_tinh,
				$this->Nam_sinh,
				$this->Sdt,
				$this->Dia_chi,
				$this->Email,
				$this->Ma_admin
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_admin = ?",[
				$this->Ma_admin
			]);
	}
}