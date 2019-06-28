<div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('layer') }}">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('ta_ca_xe') }}">product </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('gioi_thieu') }}">introduce </a>
          </li>
        </ul>
      </div>
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
            @foreach($details as $xe)
            <tr>
                <td>{{$xe->Ten_xe}}</td>
                <td>{{$xe->Ten_loai_xe}}</td>
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
      @if(Session::has('Ma_khach_hang'))
      @else
        <li><a href="{{ route('khach_hang_view_login') }}"><span class="glyphicon glyphicon-user"></span> Login</a>
        </li>
        @endif

      @if(Session::has('Ma_khach_hang'))
        <li><a href="{{ route('khach_hang_logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @else
      @endif
      </ul>
  </div>
    </div>
 