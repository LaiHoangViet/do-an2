<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Danh sách Hợp Đồng</h1>
	<a href="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_insert') }}">
		<button>
			Thêm
		</button>
	</a>
	<table border="1" width="100%">
		<tr>
			<th>Hợp Đồng</th>
			<th>Xe</th>
			<th>Giá</th>
			<th>Ngày Nhận Xe</th>
			<th>Ngày Trả Xe</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($array_hop_dong_chi_tiet as $hop_dong_chi_tiet)
			<tr>
				<td>
					{{$hop_dong_chi_tiet->So_hop_dong}}
				</td>
				<td>
					{{$hop_dong_chi_tiet->Ten_xe}}
				</td>
				<td>
					{{$hop_dong_chi_tiet->Gia}}
				</td> 
				<td>
					{{$hop_dong_chi_tiet->Ngay_nhan}}
				</td>
				<td>
					{{$hop_dong_chi_tiet->Ngay_tra}}
				</td> 
				<td>
				<a href="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_update', ['id' => $hop_dong_chi_tiet->Ma_hop_dong]) }}" >
				Sửa
				</a></td>
				<td>
				<a href="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_delete', ['id' => $hop_dong_chi_tiet->Ma_hop_dong]) }}">Xóa
				</a>
				</td>
			</tr>
		@endforeach
	</table>
</body>
</html>