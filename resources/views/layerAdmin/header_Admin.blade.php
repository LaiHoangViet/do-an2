
                <nav class="navbar navbar-default">
                    
                                    <div class="container-fluid">
                                        <div class="navbar-minimize">
                                            <button id="minimizeSidebar" class="btn btn-youtube btn-fill btn-round btn-icon">
                                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                                            </button>
                                        </div>
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">Dashboard</a>
                                        </div>
                                        <div class="collapse navbar-collapse">
                                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                    <input type="search" class="form-control" placeholder="Pesquisar..."/>
                                                </div>
                                            </form>
                                
                            <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

        <li><a href="{{ route('Admin_view_login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>

        
        <li class="dropdown">
            <a href="{{ route('Admin_logout') }}" class="dropdown-toggle" data-toggle="dropdown">
        
                <i class="fa fa-gavel"></i>
        
                    <p class="hidden-md hidden-lg">
                            Conta
        
                        <b class="caret"></b>
        
                    </p>
        
            </a>
        
        <ul class="dropdown-menu dropdown-with-icons">
        
            <li>
        
                <a href="index.html" class="text-danger">
        
                    <i class="fa-2x">&times;</i>
                        Log out
                </a>
            </li>
        </ul>
    </li>
  </ul>
</div>
</div>
</nav>