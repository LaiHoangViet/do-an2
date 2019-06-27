<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('layerAdmin') }}">Trang Chủ</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('Admin.Admin_view_all') }}">
                                <p>Quản lí Admin </p>
                            </a></li>

      <li><a href="{{ route('khach_hang.khach_hang_view_all') }}">
                                <p>Quản lí khách hàng</p>
                            </a></li>
    
   
      <li><a href="{{ route('xe.xe_view_all') }}">
                                <p>Quản lí xe </p>
                            </a>
      </li>

      <li><a href="{{ route('loai_xe.loai_xe_view_all') }}">
                                <p>Quản lí loại xe  </p>
                            </a>
      </li>

      <li> <a href="{{ route('hop_dong.hop_dong_view_all') }}">
                                <p>Quản lí hợp đồng  </p>
                            </a>
      </li>

      <li> <a href="{{ route('hop_dong_chi_tiet.hop_dong_chi_tiet_view_all') }}">
                                <p>Quản lí hợp đồng chi tiết  </p>
                            </a>
      </li>

      <li> <a href="{{ route('sua_chua.sua_chua_view_all') }}">
                                <p>Quản lí sửa chữa  </p>
                            </a>
      </li>

      <li> <a href="{{ route('dat_xe.dat_xe_view_all') }}">
                                <p>Quản lí đặt xe  </p>
                            </a>
      </li>

    </ul>

    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('Admin_logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  </div>
</nav>
  


</body>
</html>
