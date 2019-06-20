<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('loai_xe.loai_xe_process_insert') }}" method="post">
		{{csrf_field()}}
		Tên Loại Xe
		<input type="text" name="Ten_loai_xe">
		<br>
		<button>Thêm Loại Xe</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
	</form>
</body>
</html>