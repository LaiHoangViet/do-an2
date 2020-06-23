@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_dx') }}" method="post" role="Search">
        {{csrf_field()}}
      <input type="text" class="form-control" placeholder="Search" name="key">
          <button type="submit">
            tìm kiếm 
          </button>
    </form>
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên người nhận</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $dat_xe)
            <tr>
                <td>{{$dat_xe->Ho_ten}}</td>
            </tr>
            <tr>
                <td>{{$dat_xe->Ten_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @elseif(isset($Message))
  <p>{{$message}}</p>
    @endif
</div>

	<center><h1>Danh sách đặt xe</h1></center>
	<center><a href="{{ route('dat_xe.dat_xe_view_insert') }}">
		<button>
			Thêm đặt Xe
		</button>
	</a></center><br>
	
	<center><table border="1" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Ngày Đặt</th>
			<th>Tên Khách Hàng</th>
			<th>Tên Xe</th>
			<th>Tên người nhận </th>
			<th>Số Điện Thoại</th>
			<th>Địa Chỉ</th>
			<th>Tổng tiền </th>
			<th>Ngày Lấy</th>
			<th>Ngày Trả</th>

		</tr>
		@foreach ($array_dat_xe as $dat_xe)
			<tr>
				<td>
					{{$dat_xe->Ngay}}
				</td>

				<td>
					{{$dat_xe->Ho_ten}}
				</td>

				<td>
					{{$dat_xe->Ten_xe}}
				</td>

				<td>
					{{$dat_xe->Ten_Nguoi_nhan}}
				</td>

				<td>
					{{$dat_xe->Sdt_Nguoi_nhan}}
				</td>
				
				<td>
					{{$dat_xe->Dc_Nguoi_nhan}}
				</td>
				
				<td>
					{{$dat_xe->Tong_tien}}
				</td>

				<td>
					{{$dat_xe->Ngay_lay}}
				</td>

				<td>
					{{$dat_xe->Ngay_tra}}
				</td>

</tr>
		@endforeach
	</table></center></div>
@endsection

