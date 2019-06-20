<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('Admin.Admin_process_update', ['id' => $Admin->Ma_admin]) }}" method="post">
		{{csrf_field()}}

		<div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Đăng Nhập</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_dang_nhap" value="{{$Admin->Ten_dang_nhap}}" placeholder="Tên Đăng Nhập..">
		    </div>
		</div>


		<div class="row">
		    <div class="col-25">
		      <label for="fname">Mật Khẩu</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Mat_khau" value="{{$Admin->Mat_khau}}" placeholder="Mật Khẩu..">
		    </div>
		</div>

		<div class="row">
		    <div class="col-25">
				<label for="fname">Giới tính</label>
			</div>
		    <div class="col-75">
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
		 	</div>
		</div>

		 <div class="row">
		    <div class="col-25">
		    	<label for="fname">Năm Sinh</label>
		    </div>
		    <div class="col-75">
		    	<input type="date" id="fname" name="Nam_sinh" value="{{$Admin->Nam_sinh}}" placeholder="Năm Sinh..">
		    </div>
		</div>

		<div class="row">
		    <div class="col-25">
		    	<label for="fname">Số Điện Thoại</label>
		    </div>
		    <div class="col-75">
		    	<input type="text" id="fname" name="Sdt" value="{{$Admin->Sdt}}" placeholder="Số Điện Thoại..">
		    </div>
		</div>

		<div class="row">
		    <div class="col-25">
		      <label for="fname">Địa Chỉ</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Dia_chi" value="{{$Admin->Dia_chi}}" placeholder="Địa Chỉ..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Email</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Email" value="{{$Admin->Email}}" placeholder="Email..">
		    </div>
		  </div>

		<center><div class="row">
		<button>Sửa Admin</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
	  	</div></center>
	</form>
</body>
</html>