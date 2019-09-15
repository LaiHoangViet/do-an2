<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/dat_hang.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">  
	  <form id="contact" action="{{route('process_dat_hang')}}" method="post">
	  	{{csrf_field()}}
	    <h3>Đặt xe </h3>
	    <h4>Please fill in contact below...</h4>

	    <fieldset>
	      <input placeholder="Ngày Đặt" type="date" name="Ngay" tabindex="1" required autofocus>
	    </fieldset>

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
				<input type="text" name="Tong_tien" value="{{($xe->Gia).' vnđ'}}" readonly>
			</div>      
    </div>
  </div>

	    <fieldset>
	      <input placeholder="Người nhận" type="text" name="Ten_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Số Điện Thoại" type="text" name="Sdt_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Địa Chỉ" type="text" name="Dc_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Ngày Lấy Xe" type="date" name="Ngay_lay" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Ngày Trả Xe" type="date" name="Ngay_tra" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
	    </fieldset>
	  </form>
	</div>
</body>
</html>
