<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('Admin.Admin_process_update', ['id' => $Admin->Ma_admin]) }}" method="post">
		{{csrf_field()}}
		Tên Đăng Nhập
		<input type="text" name="Ten_dang_nhap" class="form-control" value="{{$Admin->Ten_dang_nhap}}">
		<br>
		Mật Khẩu
		<input type="text" name="Mat_khau" class="form-control" value="{{$Admin->Mat_khau}}">
		<br>
		<label class="control-label">
			Giới tính
		</label>
		<label class="radio-inline"><input type="radio" name="Gioi_tinh" value="1"
			@if ($Admin->Gioi_tinh==1)
				checked 
			@endif
			>Nam</label>
		<label class="radio-inline"><input type="radio" name="Gioi_tinh" value="0"
			@if ($Admin->Gioi_tinh==0)
				checked 
			@endif
			>Nữ</label>
		<br>
		Năm sinh
		<input type="text" name="Nam_sinh" class="form-control" value="{{$Admin->Nam_sinh}}">
		<br>
		Số Điện Thoại
		<input type="number" name="Sdt" class="form-control" value="{{$Admin->Sdt}}">
		<br>
		Địa Chỉ
		<input type="text" name="Dia_chi" class="form-control" value="{{$Admin->Dia_chi}}"> 
		<br>
		Email
		<input type="text" name="Email" class="form-control" value="{{$Admin->Email}}">
		<br>
		<button>Sửa Admin</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
	</form>
</body>
</html>