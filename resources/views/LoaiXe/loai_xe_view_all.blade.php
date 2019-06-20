<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
	<h1>Danh sách Loại Xe</h1>
	<a href="{{ route('loai_xe.loai_xe_view_insert') }}">
		<button>
			Thêm Loại Xe
		</button>
	</a>
	<table border="1" width="50%">
		<tr>
			<th>Tên Loại Xe</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($array_loai_xe as $loai_xe)
			<tr>
				<td>
					{{$loai_xe->Ten_loai_xe}}
				</td>
				<td>
				<a href="{{ route('loai_xe.loai_xe_view_update', ['id' => $loai_xe->Ma_loai_xe]) }}" >
				Sửa
				</a></td>
				<td>
				<a href="{{ route('loai_xe.loai_xe_delete', ['id' => $loai_xe->Ma_loai_xe]) }}">Xóa
				</a>
				</td>
			</tr>
		@endforeach
	</table></center>
</body>
</html>