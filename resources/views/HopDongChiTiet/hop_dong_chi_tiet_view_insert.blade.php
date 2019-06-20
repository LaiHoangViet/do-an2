<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_process_insert') }}" method="post">
		{{csrf_field()}}

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Hợp Đồng</label>
		    </div>
		    <div class="col-75">
		      	<select class="form-control" name="Ma_hop_dong">
					@foreach ($array_hop_dong as $hop_dong)
						<option value="{{$hop_dong->Ma_hop_dong}}">
							{{$hop_dong->So_hop_dong}}
						</option>
					@endforeach
				</select>
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Xe</label>
		    </div>
		    <div class="col-75">
				<select class="form-control" name="Ma_xe">
					@foreach ($array_xe as $xe)
						<option value="{{$xe->Ma_xe}}">
							{{$xe->Ten_xe}}
						</option>
					@endforeach
				</select>
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Giá</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="text" id="lname" name="Gia" placeholder="1000 VND..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Nhận Xe</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_nhan">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Trả Xe</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_tra">
		    </div>
		  </div>

  		<center><div class="row">
			<button>Thêm Hợp Đồng Chi Tiết</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
  		</div></center>
	</form>
</body>
</html>