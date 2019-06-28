    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="{{ route('layerAdmin') }}">Trang chủ</a> </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('Admin.Admin_view_all') }}">Quản lí admin </a></li>
          <li><a href="{{ route('khach_hang.khach_hang_view_all') }}">Quản lí khách hàng </a></li>
          <li><a href="{{ route('loai_xe.loai_xe_view_all') }}">Quản lí loại xe </a></li>
          <li><a href="{{ route('xe.xe_view_all') }}">Quản lí xe </a></li>
          <li><a href="{{ route('dat_xe.dat_xe_view_all') }}">Quản lí đặt xe </a></li>
          <li><a href="{{ route('sua_chua.sua_chua_view_all') }}">Quản lí sửa chữa </a></li>
          <li><a href="{{ route('hop_dong.hop_dong_view_all') }}">QUản lí hợp đồng </a></li>
          <li><a href="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all') }}">Quản lí hợp đồng CT</a></li>
        </ul>
      </div>
    </div>