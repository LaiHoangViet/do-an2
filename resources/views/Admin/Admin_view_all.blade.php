@extends('layer.master')
@push('css')
<style type="text/css">
	h1{
		color: red;
	}
</style>
@endpush
@section('content')

	<h1>Danh sách Admin</h1>
	<a href="{{ route('Admin.Admin_view_insert') }}">
		<button>
			Thêm Admin
		</button>
	</a>
	<table border="1" width="100%">
		<tr>
			<th>Tên Đăng Nhập</th>
			<th>Mật Khẩu</th>
			<th>Giới Tính</th>
			<th>Năm Sinh</th>
			<th>Số Điện Thoại</th>
			<th>Địa Chỉ</th>
			<th>Email</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($array_Admin as $Admin)
			<tr>
				<td>
					{{$Admin->Ten_dang_nhap}}
				</td>
				<td>
					{{$Admin->Mat_khau}}
				</td>
				<td>
				@if ($Admin->Gioi_tinh==1)
					Nam
				@else
					Nữ
				@endif
				</td>
				<td>
					{{$Admin->Nam_sinh}}
				</td>
				<td>
					{{$Admin->Sdt}}
				</td>
				<td>
					{{$Admin->Dia_chi}}
				</td>
				<td>
					{{$Admin->Email}}
				</td>
				<td>
				<a href="{{ route('Admin.Admin_view_update', ['id' => $Admin->Ma_admin]) }}" >
				Sửa
				</a></td>
				<td>
				<a href="{{ route('Admin.Admin_delete', ['id' => $Admin->Ma_admin]) }}">Xóa
				</a>
			</td>
			</tr>
		@endforeach
	</table>
@endsection
@push('js')
<script type="text/javascript">
	
</script>
@endpush	
