<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('loai_xe.loai_xe_process_update', ['id' => $loai_xe->Ma_loai_xe]) }}" method="post">
		{{csrf_field()}}
		Loại Xe
		<input type="text" name="Ten_loai_xe" class="form-control" value="{{$loai_xe->Ten_loai_xe}}">
		<br>
		<button class="btn btn-success">
		Sửa
	</button>
	<a href="{{url()->previous()}}">
		<button type="button" class="btn btn-danger">
			Quay lại
		</button>
	</a>
	</form>

</body>
</html>