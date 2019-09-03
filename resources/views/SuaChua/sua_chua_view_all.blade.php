@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

         <form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_sc') }}" method="post" role="Search">
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
                <th>Ngày </th>
                <th>Tên xe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $sua_chua)
            <tr>
                <td>{{$sua_chua->Ngay_sua}}</td>
                <td>{{$sua_chua->Ma_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @elseif(isset($Message))
  <p>{{$message}}</p>
    @endif
</div>

	<center><h1>Danh sách sửa chữa</h1></center>
	<center><a href="{{ route('sua_chua.sua_chua_view_insert') }}">
		<button>
			Thêm sửa chữa
		</button>
	</a></center><br>
	
	<center><table border="1" width="80%" bgcolor="CCFF66">
		<tr>
			<th>Ngày Sửa</th>
			<th>Tên Xe</th>
			<th>Tình Trạng</th>
			<th>Ngày Sửa Xong</th>
			<th>Chi Phí</th>

		</tr>
		@foreach ($array_sua_chua as $sua_chua)
			<tr>
				<td>
					{{$sua_chua->Ngay_sua}}
				</td>

				<td>
					{{$sua_chua->Ten_xe}}
				</td>

				<td>
					{{$sua_chua->Tinh_trang}}
				</td>

				<td>
					{{$sua_chua->Ngay_sua_xong}}
				</td>
				
				<td>
					{{$sua_chua->Chi_phi}}
				</td>
			</tr>
	


		@endforeach
	</table></center>
</div>
@endsection
		
