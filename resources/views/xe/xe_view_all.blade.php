@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

		<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_xe') }}" method="post" role="Search">
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
                <th>Tên xe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $xe)
            <tr>
                <td>{{$xe->Ten_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @elseif(isset($Message))
  <p>{{$message}}</p>
    @endif
</div>

	<center><h1>Danh sách xe</h1></center>
	<center><a href="{{ route('xe.xe_view_insert') }}">
		<button>
			Thêm Xe
		</button>
	</a></center><br>
	
	<h1><center><table border="1" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Tên Xe</th>
			<th>Ảnh</th>
			<th>Biển Số</th>
			<th>Hãng Xe</th>
			<th>Mô Tả</th>
			<th>Giá</th>
			<th>Tình Trạng</th>
			<th>Loại Xe</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($array_xe as $xe)
			<tr>
				<td>
					{{$xe->Ten_xe}}
				</td>
				<td>
					<img width="100px" src="../storage/{{$xe->Anh}}" >
				</td>
				<td>
					{{$xe->Bien_so}}
				</td>
				<td>
					{{$xe->Hang_xe}}
				</td>
				<td>
					{{$xe->Mo_ta}}
				</td>
				<td>
					{{$xe->Gia}}
				</td>
				<td>
					@if ($xe->Tinh_trang==1)
					Còn Xe
				@else
					Hết Xe
				@endif
				</td>
				<td>
					{{$xe->Ten_loai_xe}}
				</td>
				<td>
				<a href="{{ route('xe.xe_view_update', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a></td>
				
				<td>
				<a href="{{ route('xe.xe_delete', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
				</td>
			</tr>
		@endforeach
	</table></center></h1>
</div>
@endsection
