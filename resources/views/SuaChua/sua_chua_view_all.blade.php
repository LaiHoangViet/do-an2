@extends('layerAdmin.Admin_master')
<style type="text/css">
	.container{
		background-color: #FFFAF0;
		width: 100%;
		height: 500px;
	}
</style>
@section('content')

<div class="container">
	<center><h1>Danh sách sửa chữa</h1></center>
	<center><a href="{{ route('sua_chua.sua_chua_view_insert') }}">
		<button>
			Thêm sửa chữa
		</button>
	</a></center><br>
	
	<center><table border="0" width="80%" bgcolor="CCFF66">
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
		</table>


		@endforeach
	</table></center>
</div>
@endsection
		
