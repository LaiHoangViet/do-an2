@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">
	<center><h1>Danh sách sửa chữa</h1></center>
	<center><a href="{{ route('sua_chua.sua_chua_view_insert') }}">
		<button>
			Thêm sửa chữa
		</button>
	</a></center><br>
	
	<center><table border="1" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Ngày Sửa</th>
			<th>Tên Xe</th>
			<th>Tình Trạng</th>
			<th>Ngày Sửa Xong</th>
			<th>Chi Phí</th>

		</tr>
		@foreach ($array_sua_chua as $sua_chua)
			<tr>
				<td>
					{{$sua_chua->Ngay_sua}}
				</td>

				<td>
					{{$sua_chua->Ten_xe}}
				</td>

				<td>
					{{$sua_chua->Tinh_trang}}
				</td>

				<td>
					{{$sua_chua->Ngay_sua_xong}}
				</td>
				
				<td>
					{{$sua_chua->Chi_phi}}
				</td>
			</tr>
	


		@endforeach
	</table></center>
</div>
@endsection
		
