<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_process_update', ['id' => $hop_dong_chi_tiet->Ma_hop_dong]) }}" method="post">
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
			<input type="text" name="Gia" class="form-control" value="{{$hop_dong_chi_tiet->Gia}}">
		</div>
		<div>
			Ngày Nhận Xe
			<input type="text" name="Ngay_nhan" class="form-control" value="{{$hop_dong_chi_tiet->Ngay_nhan}}">
		</div>
		<div>
			Ngày Trả Xe
			<input type="text" name="Ngay_tra" class="form-control" value="{{$hop_dong_chi_tiet->Ngay_tra}}">
		</div>
		<div>
			<button class="btn btn-success">
			Sửa
			</button>
			<a href="{{url()->previous()}}">
			<button type="button" class="btn btn-danger">
				Quay lại
			</button>
			</a>
	</div>
	</form>

</body>
</html>