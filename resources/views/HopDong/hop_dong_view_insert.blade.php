<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('hop_dong.hop_dong_process_insert') }}" method="post">
		{{csrf_field()}}

		<div>
		Hợp Đồng
		<input type="text" name="So_hop_dong">
		</div>
		<div>
		Ngày
		<input type="text" name="Ngay">
		</div>
		<div>
			Khách Hàng
		<select class="form-control" name="Ma_khach_hang">
			@foreach ($array_khach_hang as $khach_hang)
				<option value="{{$khach_hang->Ma_khach_hang}}">
					{{$khach_hang->Ho_ten}}
				</option>
			@endforeach
		</select>
		</div>
		<div>
		Nội Dung
		<input type="text" name="ND_hop_dong">
		</div>
		<div>
		Hình Thức Thanh Toán
		<input type="text" name="Hinh_thuc_thanh_toan">
		</div>
		<div>
		Điều Khoản
		<input type="text" name="Dieu_khoan">
		</div>
		<div>
		Tổng Tiền
		<input type="text" name="Tong_tien_thanh_toan">
		</div>
		<div>
		Tiền Cọc
		<input type="text" name="Tien_coc">
		</div>
		<div>
		<button>Thêm Hợp Đồng</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a></div>
	</form>
</body>
</html>