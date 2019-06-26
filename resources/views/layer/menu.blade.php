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
      <a class="navbar-brand" href="{{ route('ta_ca_xe') }}">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('ta_ca_xe') }}">Trang Chủ </a></li>
      <li><a href="{{ route('gioi_thieu') }}"><i class="pe-7s-graph"></i>Giới Thiệu</a></li>
    
   
      <li><a href="{{ route('dat_hang') }}">Đặt Xe  </a></li>
    </ul>

      <form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem') }}" method="post" role="Search">
        {{csrf_field()}}
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="key">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ten_loai_xe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $loai_xe)
            <tr>
                <td>{{$loai_xe->Ma_loai_xe}}</td>
                <td>{{$loai_xe->Ten_loai_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @elseif(isset($Message))
  <p>{{$message}}</p>
    @endif
</div>
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('khach_hang_view_login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="{{ route('khach_hang_logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  </div>
</nav>
  


</body>
</html>
