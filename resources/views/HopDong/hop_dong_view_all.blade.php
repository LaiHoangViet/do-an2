@extends('layerAdmin.Admin_master')

@section('content')

<div class="container-fluid">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_hd') }}" method="post" role="Search">
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
					<th>Tên khách hàng </th>
					<th>Tên xe</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $hop_dong)
				<tr>
					<td>{{$hop_dong->Ho_ten}}</td>
					<td>{{$hop_dong->Ten_xe}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@elseif(isset($Message))
	<p>{{$message}}</p>
	@endif
</div>

<center>
	<h1>Danh sách Hợp Đồng</h1>
	<a href="{{ route('hop_dong.hop_dong_view_insert') }}">
		<button>
			Thêm Hợp Đồng
		</button>
	</a>
	<br><br>

	<table class="table table-striped view-khach-hang table-responsive-lg">
		<thead>
			<tr>
				<th scope="col">Ngày</th>
				<th scope="col">Khách Hàng</th>
				<th scope="col">Xe</th>
				<th scope="col">Ngày Nhận Xe</th>
				<th scope="col">Ngày Trả Xe</th>
				<th scope="col">Hình Thức Thanh Toán</th>
				<th scope="col">Tổng Tiền</th>
				<th scope="col">Tiền Cọc</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_hop_dong as $hop_dong)
			<tr>
				<td>
					{{$hop_dong->Ngay}}
				</td>
				<td>
					{{$hop_dong->Ho_ten}}
				</td>
				<td>
					{{$hop_dong->Ten_xe}}
				</td>
				<td>
					{{$hop_dong->Ngay_nhan}}
				</td>
				<td>
					{{$hop_dong->Ngay_tra}}
				</td> 
				<td>
					{{$hop_dong->Hinh_thuc_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Tong_tien_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Tien_coc}}
				</td>
				<td>
					<a href="{{ route('hop_dong.hop_dong_view_update', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-warning btn-icon edit">
						<span class="material-icons">
							system_update_alt
						</span>
					</a>
				</td>
				<td>
					<a href="{{ route('hop_dong.hop_dong_delete', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-danger btn-icon remove">
						delete_forever
					</span>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</center>
@endsection
