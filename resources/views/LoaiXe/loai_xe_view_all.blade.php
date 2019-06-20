@extends('layer.master')
@push('css')
<style type="text/css">
	h1{
		color: green;
	}
</style>
@endpush
@section('content')

	<center><h1>Danh sách Loại Xe</h1>
	<a href="{{ route('loai_xe.loai_xe_view_insert') }}">
		<button>
			Thêm Loại Xe
		</button>
	</a><br><br>

	<table border="1" width="20%">
		<tr>
			<th>Tên Loại Xe</th>
			<th></th>
		</tr>
		@foreach ($array_loai_xe as $loai_xe)
			<tr>
				<td>
					{{$loai_xe->Ten_loai_xe}}
				</td>
				<td>
				<a href="{{ route('loai_xe.loai_xe_view_update', ['id' => $loai_xe->Ma_loai_xe]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				
				<a href="{{ route('loai_xe.loai_xe_delete', ['id' => $loai_xe->Ma_loai_xe]) }}" class="btn btn-simple btn-danger btn-icon remove">
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