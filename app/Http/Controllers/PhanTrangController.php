<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Xe;

/**
 * 
 */
class PhanTrangController
{
	
	public function phan_trang()
	{
		$data['xe']= xe::paginate(3);
		dd($data);
		return view('layer.ta_ca_xe',$data);
	}
}