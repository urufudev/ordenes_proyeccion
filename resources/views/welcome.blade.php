<!doctype html>
<html lang="es">

<!-- Mirrored from www.pxdraft.com/themeforest/axoma/axoma/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 15:34:17 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Axoma">
  <meta name="keywords" content="Axoma">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!--
  ========================================================================
  EXCLUSIVE ON themeforest.net
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Template Name   : Axoma
  Author          : PXdraft
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Copyright (c) 2018 - Axoma
  ========================================================================
  -->
  <title>Sistema de Administración de Personal</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Plugin CSS -->
  <link href="{{asset('landing/plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/plugin/font-awesome/css/fontawesome-all.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/plugin/et-line/style.css')}}" rel="stylesheet">
  <!-- <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet"> -->
 <!--  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet"> -->
  <!-- End -->
  

  <!-- Theme css -->
  <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('landing/css/color/default.css')}}" rel="stylesheet" id="color_theme">
  <!-- End -->

</head>

<!-- ========== Body Starts ========== -->
<!-- Body Start -->
<body data-spy="scroll" data-target="#navbar" data-offset="98">

 

  <!-- Header -->
  <header>
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('landing/img/logo_admin.png')}}" title="" alt=""  width="80" height="80">
          <b>SAP DREA</b> 
         
        </a>
        <!-- / -->


        <!-- Top Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
          <ul class="navbar-nav ml-auto align-items-center">
            @auth
            <li><a class="nav-link-btn btn btn-white m-25px-l md-m-0px-l" href="{{ url('/home') }}">IR A PANEL</a></li>
            
        @else
        @if (Route::has('register'))
        <li><a class="nav-link" href="{{ route('register') }}">REGISTRARSE</a></li>    
        
        @endif
            <li><a class="nav-link-btn btn btn-white m-25px-l md-m-0px-l" href="{{ route('login') }}">INICIAR SESION</a></li>
            
        @endauth

           
            
            
          </ul>
        </div>
        <!-- / -->

      </div><!-- Container -->
    </nav> <!-- Navbar -->
  </header>
  <!-- Header End -->

  <!-- Main -->
  <main>



    <!-- 
    =============================
      Home Banner
    =============================
    -->
    <section id="home" class="home-banner-04 theme-bg bg-effect-box">
      <div class="bg-effect bg-fixed bg-cover" style="background-image: url({{asset('landing/img/fondo_landing.jpg')}});"></div>
      <div id="particles_effect" style="background-image: url({{asset('landing/img/banner-effect-6.svg')}});" class="particles-effect"></div>
      <div class="container">
        <div class="row  full-screen align-items-center justify-content-center p-100px-tb md-p-50px-b">
          <div class="col-lg-5 md-p-30px-tb">
           
            <h1 class="font-alt white-color"> <b>SAP :: SISTEMA DE ADMINISTRACIÓN DE PERSONAL</b> </h1>
            <p class="white-color-light large-text">Lorem ipsum dolor sit amet, consectetur.</p>
            <p class="white-color-light">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="btn-bar p-15px-t">

                @auth
            
                    <a href="{{ url('/home') }}" class="btn  btn-primary"> <b>IR A PANEL</b> </a>
                @else
                
                    <a href="{{ route('login') }}" class="btn  btn-primary"> <b>INICIAR SESION</b> </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn  btn-success"> <b>REGISTRARSE</b> </a>   
                    
                    @endif
                @endauth
              
              
            </div>
          </div> <!-- col -->
          <div class="col-lg-7 text-center">
            <img src="{{asset('landing/img/slider-image.png')}}" title="" alt="">
          </div>
        </div> <!-- row -->
      </div>
    </section>
    <!-- / -->
    

    <!-- 
    =============================
      About us
    =============================
    -->
   

  </main>
  <!-- / -->

  
  

  <!-- Jquery -->
  <script src="{{asset('landing/js/jquery-3.2.1.min.js')}}"></script>
<!--   <script src="static/js/jquery-migrate-3.0.0.min.js"></script> -->
  <!-- End -->

  <!-- Plugin JS -->
  <!-- <script src="static/plugin/appear/jquery.appear.js"></script> --><!--appear-->
  <!-- <script src="static/plugin/bootstrap/js/popper.min.js"></script> --><!--popper-->
  <script src="{{asset('landing/plugin/bootstrap/js/bootstrap.js')}}"></script><!--bootstrap-->
  <script src="{{asset('landing/plugin/particles/particles.min.js')}}"></script>
  <script src="{{asset('landing/plugin/particles/particles-app.js')}}"></script>
  <!-- End -->

  <!-- Jquery -->
  
<!--   <script src="static/js/jquery-migrate-3.0.0.min.js"></script> -->
  <!-- End -->

 
  <!-- Custom -->
  <!-- 
  <script src="landing/js/jquery.parallax-scroll.js"></script> -->
  <script src="{{asset('landing/js/custom.js')}}"></script>
  <!-- End -->

</body>
<!-- ========== End of Body ========== -->

<!-- Mirrored from www.pxdraft.com/themeforest/axoma/axoma/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 15:34:39 GMT -->
</html>