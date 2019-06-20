<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('khach_hang.khach_hang_process_update', ['id' => $khach_hang->Ma_khach_hang]) }}" method="post">
		{{csrf_field()}}
		<div>
			Tên Đăng Nhập
			<input type="text" name="Ten_dang_nhap" class="form-control" value="{{$khach_hang->Ten_dang_nhap}}">
		</div>
		<div>
			Mật Khẩu
			<input type="text" name="Mat_khau" class="form-control" value="{{$khach_hang->Mat_khau}}">
		</div>
		<div>
			Tên Khách Hàng
			<input type="text" name="Ho_ten" class="form-control" value="{{$khach_hang->Ho_ten}}">
		</div>
		<div>
			<label class="control-label">
				Giới tính
			</label>
			<label class="radio-inline"><input type="radio" name="Gioi_tinh" value="1"
				@if ($khach_hang->Gioi_tinh==1)
					checked 
				@endif
				>Nam</label>
			<label class="radio-inline"><input type="radio" name="Gioi_tinh" value="0"
				@if ($khach_hang->Gioi_tinh==0)
					checked 
				@endif
				>Nữ</label>
		</div>
		<div>
			Năm sinh
			<input type="text" name="Nam_sinh" class="form-control" value="{{$khach_hang->Nam_sinh}}">
		</div>
		<div>
			Số Điện Thoại
			<input type="number" name="Sdt" class="form-control" value="{{$khach_hang->Sdt}}">
		</div>
		<div>
			Địa Chỉ
			<input type="text" name="Dia_chi" class="form-control" value="{{$khach_hang->Dia_chi}}"> 
		</div>
		<div>
			Email
			<input type="text" name="Email" class="form-control" value="{{$khach_hang->Email}}">
		</div>
		<div>
			Số Chứng Minh Thư
			<input type="text" name="So_CMT" class="form-control" value="{{$khach_hang->So_CMT}}">
		</div>
		<div>
			Số Tài Khoản
			<input type="number" name="So_TK" class="form-control" value="{{$khach_hang->So_TK}}">
		</div>
		<div>
			Tên Ngân Hàng
			<input type="text" name="Ngan_hang" class="form-control" value="{{$khach_hang->Ngan_hang}}">
		</div>
		<div>
			Tên Cơ Quan
			<input type="text" name="Ten_co_quan" class="form-control" value="{{$khach_hang->Ten_co_quan}}">
		</div>
		<div>
		<button>Sửa Khách Hàng</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
		</div>
	</form>
</body>
</html>