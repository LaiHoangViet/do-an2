@extends('layerAdmin.Admin_master')

@section('content')

	<center><h1>Danh sách đặt xe</h1></center>
	<center><a href="{{ route('dat_xe.dat_xe_view_insert') }}">
		<button>
			Thêm đặt Xe
		</button>
	</a></center><br>
	
	<center><table border="1" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Ngày Đặt</th>
			<th>Tên Khách Hàng</th>
			<th>Tên Xe</th>
			<th>CMTND</th>
			<th>Số Điện Thoại</th>
			<th>Địa Chỉ</th>
			<th>Số Tài Khoản</th>
			<th>Tên Ngân Hàng </th>
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
					{{$dat_xe->So_CMT}}
				</td>

				<td>
					{{$dat_xe->Sdt}}
				</td>

				<td>
					{{$dat_xe->Dia_chi}}
				</td>

				<td>
					{{$dat_xe->So_TK}}
				</td>
				
				<td>
					{{$dat_xe->Ngan_hang}}
				</td>

				<td>
					{{$dat_xe->Ngay_lay}}
				</td>

				<td>
					{{$dat_xe->Ngay_tra}}
				</td>


		@endforeach
	</table></center>
@endsection

