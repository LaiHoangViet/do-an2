
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" />




    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="wrapper">
    <!--menu-->
    @include('layerAdmin.menu_Admin')

    <div class="main-panel">
    </div>
    <div class="main-content" style="height: 1000px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                    <!--content-->
                   
                 
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
     @include('layerAdmin.footer_Admin')
</div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://darkceptor44.000webhostapp.com/assets/js/light-bootstrap-dashboard.js"></script>
    <script src="index.js"></script>

  </body>
</html>