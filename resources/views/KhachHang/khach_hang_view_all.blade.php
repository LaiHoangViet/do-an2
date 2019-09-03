@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_kh') }}" method="post" role="Search">
        {{csrf_field()}}
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="key">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên đăng nhập</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $khach_hang)
            <tr>
                <td>{{$khach_hang->Ten_dang_nhap}}</td>
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
	<h1>Danh sách khách hàng</h1>
	<a href="{{ route('khach_hang.khach_hang_view_insert') }}">
		<button>
			Thêm Khách Hàng
		</button>
	</a><br><br>

	<table border="1" width="100%">
		<tr>
			<th>Tên Đăng Nhập</th>
			<th>Mật Khẩu</th>
			<th>Tên Khách Hàng</th>
			<th>Giới Tính</th>
			<th>Năm Sinh</th>
			<th>Số Điện Thoại</th>
			<th>Địa Chỉ</th>
			<th>Email</th>
			<th>Tên Cơ Quan</th>
			<th></th>
		</tr>
		@foreach ($array_khach_hang as $khach_hang)
			<tr>
				<td>
					{{$khach_hang->Ten_dang_nhap}}
				</td>
				<td>
					{{$khach_hang->Mat_khau}}
				</td>
				<td>
					{{$khach_hang->Ho_ten}}
				</td>
				<td>
				@if ($khach_hang->Gioi_tinh==1)
					Nam
				@else
					Nữ
				@endif
				</td>
				<td>
					{{$khach_hang->Nam_sinh}}
				</td>
				<td>
					{{$khach_hang->Sdt}}
				</td>
				<td>
					{{$khach_hang->Dia_chi}}
				</td>
				<td>
					{{$khach_hang->Email}}
				</td>
				<td>
					{{$khach_hang->Ten_co_quan}}
				</td>
				<td>
				<a href="{{ route('khach_hang.khach_hang_view_update', ['id' => $khach_hang->Ma_khach_hang]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				
				<a href="{{ route('khach_hang.khach_hang_delete', ['id' => $khach_hang->Ma_khach_hang]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
				</td>
			</tr>
		@endforeach
	</table></center>
</div>
@endsection
