@extends('layerAdmin.Admin_master')
<style type="text/css">
	.container{
		background-color: #FFFAF0;
		width: 50%;
		height: 500px;
	}
</style>
@section('content')

<div class="container">

<center>
	<h1>Danh sách Hợp Đồng</h1>
	<a href="{{ route('hop_dong.hop_dong_view_insert') }}">
		<button>
			Thêm Hợp Đồng
		</button>
	</a><br><br>
	
	<table border="0" width="100%">
		<tr>
			<th>Hợp Đồng</th>
			<th>Ngày</th>
			<th>Khách Hàng</th>
			<th>Nội Dung</th>
			<th>Hình Thức Thanh Toán</th>
			<th>Điều Khoản</th>
			<th>Tổng Tiền</th>
			<th>Tiền Cọc</th>
			<th></th>
		</tr>
		@foreach ($array_hop_dong as $hop_dong)
			<tr>
				<td>
					{{$hop_dong->So_hop_dong}}
				</td>
				<td>
					{{$hop_dong->Ngay}}
				</td>
				<td>
					{{$hop_dong->Ho_ten}}
				</td>
				<td>
					{{$hop_dong->ND_hop_dong}}
				</td>
				<td>
					{{$hop_dong->Hinh_thuc_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Dieu_khoan}}
				</td>
				<td>
					{{$hop_dong->Tong_tien_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Tien_coc}}
				</td>
				<td>
				<a href="{{ route('hop_dong.hop_dong_view_update', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				
				<a href="{{ route('hop_dong.hop_dong_delete', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
				</td>
			</tr>
		@endforeach
	</table></center>
</div>
@endsection
