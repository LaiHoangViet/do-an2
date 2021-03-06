<div class="container">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top menu-logo" id="header">
    <!-- Logo -->
    <a class="navbar-brand logo" href="{{ route('layer') }}">
      <img src="{{asset('./img/logo.jpg')}}" class="logo">
    </a>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('ta_ca_xe') }}">Xe</a>
        </li>
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('gioi_thieu') }}">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('layer') }}">Hỗ trợ</a>
        </li>
        {{-- 
        <li class="nav-item dropdown muc-menu">
          <a class="dropbtn">Giới Thiệu</a>
        </li> --}}
      </ul>
      <form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem') }}" method="post" role="Search">
        {{csrf_field()}}
        <div class="search-input">
         <span class="material-icons">
          search
        </span>
        <input type="text" placeholder="Tìm kiếm" class="search">
      </div>
    </form>
    @if(Session::has('Ma_khach_hang'))
    @else
    <a href="{{ route('khach_hang_view_login') }}" class="login-logout1"><span class="login-logout">Login</span></a>

    @endif

    @if(Session::has('Ma_khach_hang'))
    <a href="{{ route('khach_hang_logout') }}" class="login-logout1"><span class="login-logout">Logout</span> </a>
    @else
    @endif
  </div>
</nav>

</div>
