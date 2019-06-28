
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grayscale - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
   <link href="{{asset('css/grayscale.css')}}" rel="stylesheet" />
  <link href="{{asset('css/grayscale.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-reboot.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-reboot.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/grayscale.js')}}" rel="stylesheet" />
  <link href="{{asset('css/grayscale.min.js')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.bundle.js')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.bundle.min.js')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.js')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap.min.js')}}" rel="stylesheet" />

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <!--menu-->
    @include('layer.menu')
  </nav>

  <!-- Header -->
  <header class="masthead">
  <!--header-->
  @include('layer.header')
  </header>

  <!-- About Section -->
  <!--content-->
  @yield('content')
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
@include('layer.footer')
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
