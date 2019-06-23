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
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Trang Chủ </a></li>
      <li><a href="{{ route('gioi_thieu') }}"><i class="pe-7s-graph"></i>Giới Thiệu</a></li>
   
      <li><a href="#">Đặt Xe  </a></li>
    </ul>
      <form class="navbar-form navbar-left" action="{{ route('tim_kiem') }}" method="get">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="key">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('khach_hang_view_login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="{{ route('khach_hang_logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  </div>
</nav>
  


</body>
</html>
