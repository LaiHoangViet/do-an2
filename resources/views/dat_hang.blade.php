<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/dat_hang.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">  
		<form id="contact" action="{{route('process_dat_hang')}}" method="post">
			{{csrf_field()}}
			<h3>Hãy điền thông tin của bạn vào đơn dưới đây</h3>

			<div>
				<input placeholder="Ngày Đặt" type="text" name="Ngay" tabindex="1" required value="{{date('d-m-Y')}}">
			</div>

			<div class="row">
				<div class="col-25">
					<label for="fname"></label>
				</div>
				<div class="col-75">
					<div class="form-control">
						<input type="text" name="Ma_khach_hang" value="{{$ma_khach_hang}}" hidden>
						<input type="text" value="{{$ten_dang_nhap}}" readonly>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-75">
					<div class="form-control">
						<input type="text" value="{{$xe->Ten_xe}}" readonly>
						<input type="text" name="Ma_xe" value="{{$xe->Ma_xe}}" hidden>
					</div>      
				</div>
			</div>
			<div class="row">
				<div class="col-75">
					<div class="form-control">
						<input id="price" type="text" name="Tong_tien" value="{{($xe->Gia)}}" readonly price="{{$xe->Gia}}">
					</div>      
				</div>
			</div>

			<div>
				<input placeholder="Người nhận" type="text" name="Ten_Nguoi_nhan" tabindex="1" required autofocus>
			</div>

			<div>
				<input placeholder="Số Điện Thoại" type="text" name="Sdt_Nguoi_nhan" tabindex="1" required autofocus>
			</div>

			<div>
				<input placeholder="Địa Chỉ" type="text" name="Dc_Nguoi_nhan" tabindex="1" required autofocus>
			</div>

			<div class="ngay-dat-tra">
				<label class="ngay-dat-tra1">Ngày đặt:</label>
				<input id="date-start" placeholder="Ngày Lấy Xe" type="date" name="Ngay_lay" tabindex="1" required autofocus>
			</div>

			<div class="ngay-dat-tra">
				<label class="ngay-dat-tra1">Ngày trả:</label>
				<input  id="date-end" placeholder="Ngày Trả Xe" type="date" name="Ngay_tra" tabindex="1" required autofocus>
			</div>

			<div class="dat_xe">
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Đặt xe</button>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('js/dat_xe.js')}}"></script>
</body>
</html>
