@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

	<center><h1>Danh sách đặt xe</h1></center>
	<center><a href="{{ route('dat_xe.dat_xe_view_insert') }}">
		<button>
			Thêm đặt Xe
		</button>
	</a></center><br>
	
	<center><table border="0" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Ngày Đặt</th>
			<th>Tên Khách Hàng</th>
			<th>Tên Xe</th>
			<th>Tên người nhận </th>
			<th>Số Điện Thoại</th>
			<th>Địa Chỉ</th>
			<th>Tổng tiền </th>
			<th>Ngày Lấy</th>
			<th>Ngày Trả</th>

		</tr>
		@foreach ($array_dat_xe as $dat_xe)
			<tr>
				<td>
					{{$dat_xe->Ngay}}
				</td>

				<td>
					{{$dat_xe->Ho_ten}}
				</td>

				<td>
					{{$dat_xe->Ten_xe}}
				</td>

				<td>
					{{$dat_xe->Ten_Nguoi_nhan}}
				</td>

				<td>
					{{$dat_xe->Sdt_Nguoi_nhan}}
				</td>
				
				<td>
					{{$dat_xe->Dc_Nguoi_nhan}}
				</td>
				
				<td>
					{{$dat_xe->Tong_tien}}
				</td>

				<td>
					{{$dat_xe->Ngay_lay}}
				</td>

				<td>
					{{$dat_xe->Ngay_tra}}
				</td>

</tr>
		@endforeach
	</table></center></div>
@endsection

