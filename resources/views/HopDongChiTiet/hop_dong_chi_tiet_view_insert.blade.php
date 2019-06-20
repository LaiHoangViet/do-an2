<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_process_insert') }}" method="post">
		{{csrf_field()}}
		<div>
			Hợp Đồng
		<select class="form-control" name="Ma_hop_dong">
			@foreach ($array_hop_dong as $hop_dong)
				<option value="{{$hop_dong->Ma_hop_dong}}">
					{{$hop_dong->So_hop_dong}}
				</option>
			@endforeach
		</select>
		</div>
		<div>
			Xe
		<select class="form-control" name="Ma_xe">
			@foreach ($array_xe as $xe)
				<option value="{{$xe->Ma_xe}}">
					{{$xe->Ten_xe}}
				</option>
			@endforeach
		</select>
		</div>
		<div>
			Giá
			<input type="text" name="Gia">
		</div>
		<div>
			Ngày Nhận Xe
			<input type="text" name="Ngay_nhan">
		</div>
		<div>
			Ngày Trả Xe
			<input type="text" name="Ngay_tra">
		</div>
		<div>
			<button>Thêm Hợp Đồng Chi Tiết</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
		</div>
	</form>
</body>
</html>