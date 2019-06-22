<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('khach_hang.khach_hang_process_update', ['id' => $khach_hang->Ma_khach_hang]) }}" method="post">
		{{csrf_field()}}

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Đăng Nhập</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_dang_nhap" value="{{$khach_hang->Ten_dang_nhap}}" placeholder="Tên Đăng Nhập..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Mật Khẩu</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Mat_khau" value="{{$khach_hang->Mat_khau}}" placeholder="Mật Khẩu..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Khách Hàng</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ho_ten" value="{{$khach_hang->Ho_ten}}" placeholder="Tên Khách Hàng..">
		    </div>
		  </div>

		<div>
		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Giới Tính</label>
		    </div>
		    <div class="col-75">
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
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Năm Sinh</label>
		    </div>
		    <div class="col-75">
		      <input type="date" id="fname" name="Nam_sinh" value="{{$khach_hang->Nam_sinh}}" placeholder="Năm Sinh..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Số Điện Thoại</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Sdt" value="{{$khach_hang->Sdt}}" placeholder="Số Điện Thoại..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Địa Chỉ</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Dia_chi" value="{{$khach_hang->Dia_chi}}" placeholder="Địa Chỉ..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Email</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Email" value="{{$khach_hang->Email}}" placeholder="Email..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Cơ Quan</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_co_quan" value="{{$khach_hang->Ten_co_quan}}" placeholder="Tên Cơ Quan..">
		    </div>
		  </div>

		<center><div class="row">
		<button>Sửa Khách Hàng</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
	  	</div></center>
	</form>
</body>
</html>