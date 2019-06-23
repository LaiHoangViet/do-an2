<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/dat_hang.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">  
	  <form id="contact" action="{{route('process_dat_hang')}}" method="post">
	    <h3>Đặt hàng </h3>
	    <h4>Please fill in contact below...</h4>

	    <fieldset>
	      <input placeholder="Ngày Đặt" type="date" name="Ngay" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Khách Hàng" type="text" name="Ho_ten" tabindex="1" required autofocus>
	       
	    </fieldset>

	    <fieldset>
	      <input placeholder="Xe" type="text" name="Ten_xe" tabindex="1" required autofocus>

	    </fieldset>

	    <fieldset>
	      <input placeholder="CMTND" type="text" name="So_CMT" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Số Điện Thoại" type="number" name="Sdt" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Địa Chỉ" type="text" name="Dia_chi" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Số Tài Khoản" type="text" name="So_TK" tabindex="1" required autofocus>
	    </fieldset>

	    <fieldset>
	      <input placeholder="Tên Ngân Hàng" type="text" name="Ngan_hang" tabindex="1" required autofocus>
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
