<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('xe.xe_process_insert') }}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label class="control-label">
				Tên Xe
			</label>
			<input type="text" name="Ten_xe">
		</div>
		<div class="form-group">
			<label class="control-label">
			Ảnh
			</label>
			<input type="text" name="Anh">
		</div>
		<div class="form-group">
			<label class="control-label">
				Biển Số
			</label>
			<input type="text" name="Bien_so">
		</div>
		<div class="form-group">
			<label class="control-label">
			Hãng Xe
			</label>
			<input type="text" name="Hang_xe">
		</div>
		<div class="form-group">
			<label class="control-label">
			Mô Tả
			</label>
			<input type="text" name="Mo_ta">
		</div>
		<div class="form-group">
			<label class="control-label">
			Giá
			</label>
			<input type="text" name="Gia">
		</div>
		<div class="form-group">
			<label class="control-label">
			Tình Trạng
			<label><input type="radio" name="Tinh_trang" value="1" checked>Còn Xe</label>
			<label><input type="radio" name="Tinh_trang" value="0">Hết Xe</label>
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
			<button>Thêm Khách Hàng</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
		</div>
	</form>
</body>
</html>