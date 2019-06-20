<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('xe.xe_process_update', ['id' => $xe->Ma_xe]) }}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label class="control-label">
			Tên Xe
			<input type="text" name="Ten_xe" class="form-control" value="{{$xe->Ten_xe}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Ảnh
			</label>
			<input type="text" name="Anh" class="form-control" value="{{$xe->Anh}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Biển Số
			<input type="text" name="Bien_so" class="form-control" value="{{$xe->Bien_so}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Hãng Xe
			<input type="text" name="Hang_xe" class="form-control" value="{{$xe->Hang_xe}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Mô Tả
			</label>
			<input type="text" name="Mo_ta" class="form-control" value="{{$xe->Mo_ta}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Giá
			</label>
			<input type="text" name="Gia" class="form-control" value="{{$xe->Gia}}">
		</div>
		<div class="form-group">
			<label class="control-label">
			Tình Trạng
			</label>
			<label class="radio-inline"><input type="radio" name="Tinh_trang" value="1"
			@if ($xe->Tinh_trang==1)
				checked 
			@endif
			>Còn Xe</label>
		<label class="radio-inline"><input type="radio" name="Tinh_trang" value="0"
			@if ($xe->Tinh_trang==0)
				checked 
			@endif
			>Hết Xe</label>
		</div>
		<div class="form-group">
			<label class="control-label">
			Loại Xe
			</label>
			<select class="form-control" name="Ma_loai_xe">
				@foreach ($array_loai_xe as $loai_xe)
					<option value="{{$loai_xe->Ma_loai_xe}}">
						{{$loai_xe->Ten_loai_xe}}
					</option>
				@endforeach
			</select>
		</div>
		<div>
			<button class="btn btn-success">
			Sửa
			</button>
			<a href="{{url()->previous()}}">
			<button type="button" class="btn btn-danger">
				Quay lại
			</button>
			</a>
		</div>
	</form>

</body>
</html>