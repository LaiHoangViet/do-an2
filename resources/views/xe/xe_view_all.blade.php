@extends('layer.master')
@push('css')
<style type="text/css">
	h1{
		color: green;
	}
</style>
@endpush
@section('content')

	<center><h1>Danh sách xe</h1></center>
	<center><a href="{{ route('xe.xe_view_insert') }}">
		<button>
			Thêm Xe
		</button>
	</a></center><br>
	
	<center><table border="0" width="80%" bgcolor="CCFF66">
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
		</tr>
		@foreach ($array_xe as $xe)
			<tr>
				<td>
					{{$xe->Ten_xe}}
				</td>
				<td>
					{{$xe->Anh}}
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
				<td>
				<a href="{{ route('xe.xe_view_update', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				
				<a href="{{ route('xe.xe_delete', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
				</td>
			</tr>
		@endforeach
	</table></center>
@endsection
@push('js')
<script type="text/javascript">
	
</script>
@endpush	
