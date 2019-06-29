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
      <label for="fname">Tên Khách Hàng</label>
    </div>
    <div class="col-75">
      </label>
      <select class="form-control" name="Ma_khach_hang">
        @foreach ($array_khach_hang as $khach_hang)
          <option value="{{$khach_hang->Ma_khach_hang}}">
            {{$khach_hang->Ho_ten}}
          </option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Tên Xe</label>
    </div>
    <div class="col-75">
      </label>
      <select class="form-control" name="Ma_xe">
        @foreach ($array_xe as $xe)
          <option value="{{$xe->Ma_xe}}">
            {{$xe->Ten_xe}}
          </option>
        @endforeach
      </select>
    </div>
  </div>

	    <fieldset>
	      <input placeholder="Người nhận" type="text" name="Ten_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Số Điện Thoại" type="number" name="Sdt_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Địa Chỉ" type="text" name="Dc_Nguoi_nhan" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Tổng tiền " type="text" name="Tong_tien" tabindex="1" required autofocus>
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
