<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('Admin.Admin_process_insert') }}" method="post">
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
		<button>Thêm Khách Hàng</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a></div>
	</form>
</body>
</html>