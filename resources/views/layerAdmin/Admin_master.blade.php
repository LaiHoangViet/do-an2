<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>repl.it</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="https://darkceptor44.000webhostapp.com/assets/css/light-bootstrap-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://darkceptor44.000webhostapp.com/assets/css/dark-bootstrap-dashboard.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/admin.css')}}" rel="stylesheet" />

    
  </head>
  <body>
     <div class="wrapper">
        <!--menu-->
        @include('layerAdmin.menu_Admin')

                    <div class="main-panel">
                        <!--header-->
            @include('layerAdmin.header_Admin')
            
            <div class="content" style="height: 1000px">
                
                <!--content-->
                @yield('content')

            </div></div>


                <footer class="footer">
                    <!--footer-->
                @include('layerAdmin.footer_Admin')
                                </footer>

            
        </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://darkceptor44.000webhostapp.com/assets/js/light-bootstrap-dashboard.js"></script>
    <script src="index.js"></script>

  </body>
</html>