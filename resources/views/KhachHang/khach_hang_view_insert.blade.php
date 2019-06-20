<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('khach_hang.khach_hang_process_insert') }}" method="post">
		{{csrf_field()}}
		<div>
			Tên Đăng Nhập
			<input type="text" name="Ten_dang_nhap">
		</div>
		<div>
			Mật Khẩu
			<input type="text" name="Mat_khau">
		</div>
		<div>
			Tên Khách Hàng
			<input type="text" name="Ho_ten">
		</div>
		<div>
			Giới tính
			<label><input type="radio" name="Gioi_tinh" value="1" checked>Nam</label>
			<label><input type="radio" name="Gioi_tinh" value="0">Nữ</label>
		</div>
		<div>
			Năm sinh
			<input type="text" name="Nam_sinh">
		</div>
		<div>
			Số Điện Thoại
			<input type="number" name="Sdt">
		</div>
		<div>
			Địa Chỉ
			<input type="text" name="Dia_chi"> 
		</div>
		<div>
			Email
			<input type="text" name="Email">
		</div>
		<div>
			Số Chứng Minh Thư
			<input type="text" name="So_CMT">
		</div>
		<div>
			Số Tài Khoản
			<input type="text" name="So_TK">
		</div>
		<div>
			Tên Ngân Hàng
			<input type="text" name="Ngan_hang">
		</div>
		<div>
			Tên Cơ Quan
			<input type="text" name="Ten_co_quan">
		</div>
		<div>
			<button>Thêm Khách Hàng</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
		</div>
	</form>
</body>
</html>