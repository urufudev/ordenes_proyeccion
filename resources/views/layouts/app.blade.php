
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Vendor CSS -->
    

    <!-- Madmin CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
   <link href="{{asset('js/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

 
  </head>

  <body class="vertical dark-mode">

    <!-- #app start -->
    <div id="app">

      <!-- header.topbar start-->
      <header class="topbar">

        <!--navbar Logo section left-->
        <div class="topbar-left">
          <div class="main-logo">
            <a href="index.html" class="madmin-logo-link">
              <img src="{{asset('images/madmin-logo-icon.png')}}" class="logo" alt="Madmin logo">
            </a>
            <a href="index.html" class="logo-text">Madmin</a>
          </div>
        </div>
        <!--Topbar Logo section end-->

        <!--navbar menu section right-->
        <nav class="navbar-main navbar-full d-flex flex-nowrap flex-row">

          <!-- .nav-left start -->
          <ul class="navbar-inner nav-left d-flex flex-row pl-0 mb-0 order-1 bdr-l">
            <li class="text-center">
              <a href="#" id="show-menubar" class="nav-link text-center">
                <i class="icon-menu"></i>
              </a>
            </li>
          </ul>
          <!-- .nav-left end -->

          <!-- .navbar-inner start -->
          <ul class="navbar-inner d-flex flex-row ml-auto mb-0 m-20 order-2">
            
            
            
            <li class="dropdown">

              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link user-dropdown-icon">
                <img src="{{asset('images/user/thumb/default.png')}}" alt="Notification" class="list-thumbnail  rounded-circle">
              </a>

              <!-- .user-dropdown start -->
              <div class="user-dropdown dropdown-menu pdn-15" aria-labelledby="dropdownMenuButton">
                <div class="media">
                  <img src="{{asset('images/user/thumb/default.png')}}" alt="Notification" class="user-thumb rounded-circle mr-3">
                  <div class="media-body">
                    <h5 class="mgn-0">Sirus Holding</h5>
                    krista@example.com
                  </div>
                </div>
                <ul class="list-group list-group-borderless mgn-t-15">
                  <li class="list-group-item pdn-y-5 pdn-x-0">
                    <i class="icon-user"></i>
                    <a href="#">
                      <span class="mgn-l-10">Profile</span>
                    </a>
                  </li>
                  <li class="list-group-item pdn-y-5 pdn-x-0">
                    <i class="icon-key"></i>
                    <a href="#">
                      <span class="mgn-l-10">Change password</span>
                    </a>
                  </li>
                  <li class="list-group-item pdn-y-5 pdn-x-0">
                    <i class="icon-settings"></i>
                    <a href="#">
                      <span class="mgn-l-10">Settings</span>
                    </a>
                  </li>
                  <li class="list-group-item pdn-y-5 pdn-x-0">
                    <i class="icon-logout"></i>
                    <a href="#">
                      <span class="mgn-l-10">Signout</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- .user-dropdown end -->

            </li>

          </ul>
          <!-- .navbar-inner end -->

        </nav>
        <!--navbar menu section right end-->

      </header>
      <!-- header.topbar end-->

      <!-- .aside-wrapper start -->
      <aside class="aside-wrapper">

        <!-- .aside-inner start -->
        <div class="aside-inner">

          <!-- .aisde-header start -->
          <div class="aisde-header">
            <img src="{{asset('images/user/thumb/user-thumb-7.png')}}" alt="User image">
            <h6 class="user-name mgn-t-15">YIMY DAVID HUAMANCUSI CAMPOS</h6>
          </div>
          <!-- .aisde-header end -->

          <!-- .aside-body start -->
          <div class="aside-body">

            <!-- .aside-menu start -->
            <div class="aside-menu">

              <!-- ul.aside-nav start -->
              <ul class="nav aside-nav">
                <!-- Index Dashboard -->
                <li class="nav-item">
                  <a href="index.html" class="nav-link">
                    <i class="icon-grid"></i>
                    <span>INICIO</span>
                  </a>
                </li>
                <!-- Analytics -->
                @can('roles.index')
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="fab fa-gg"></i>
                      <span>ROLES</span>
                    </a>
                    <ul>
                        @can('roles.create')
                      <li>
                        <a href="{{route('roles.create')}}">
                          CREAR ROLES
                        </a>
                      </li>
                      @endcan
                      <li>
                        <a href="{{route('roles.index')}}">
                          GESTIONAR ROLES
                        </a>
                      </li>
                    </ul>
                </li>
                @endcan

                @can('users.index')
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="far fa-user"></i>
                      <span>USUARIOS</span>
                    </a>
                    <ul>
                        @can('users.create')
                      <li>
                        <a href="{{route('users.create')}}">
                          CREAR USUARIOS
                        </a>
                      </li>
                      @endcan
                      <li>
                        <a href="{{route('users.index')}}">
                          GESTIONAR USUARIOS
                        </a>
                      </li>
                    </ul>
                  </li>
                @endcan
                @can('years.index')
                <li class="nav-item has-submenu">
                  <a href="#" class="nav-link">
                    <i class="far fa-calendar-alt"></i>
                    <span>AÑOS</span>
                  </a>
                  <ul>
                    @can('years.create')
                    <li>
                      <a href="{{route('years.create')}}">
                        CREAR AÑOS
                      </a>
                    </li>
                    @endcan
                    <li>
                    <a href="{{route('years.index')}}">
                        GESTIONAR AÑOS
                      </a>
                    </li>
                  </ul>
                </li>
                @endcan
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="far fa-id-card"></i>
                      <span>GESTIONES</span>
                    </a>
                    <ul>
                      <li>
                        <a href="analytics-dashboard.html">
                          CREAR GESTIONES
                        </a>
                      </li>
                      <li>
                        <a href="analytics-customers.html">
                          ADMINISTRAR GESTIONES
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="fab fa-stack-overflow"></i>
                      <span>NIVELES</span>
                    </a>
                    <ul>
                      <li>
                        <a href="analytics-dashboard.html">
                          CREAR NIVELES
                        </a>
                      </li>
                      <li>
                        <a href="analytics-customers.html">
                            GESTIONAR NIVELES
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="far fa-building"></i>
                      <span>INSITUCIONES</span>
                    </a>
                    <ul>
                      <li>
                        <a href="analytics-dashboard.html">
                          CREAR INSTITUCIONES
                        </a>
                      </li>
                      <li>
                        <a href="analytics-customers.html">
                            GESTIONAR INSTITUCIONES
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                      <i class="far fa-file"></i>
                      <span>ORDENES DE PROYECCIÓN</span>
                    </a>
                    <ul>
                      <li>
                        <a href="analytics-dashboard.html">
                          CREAR O. PROYECCIÓN
                        </a>
                      </li>
                      <li>
                        <a href="analytics-customers.html">
                          GESTIONAR O. PROYECCIÓN
                        </a>
                      </li>
                    </ul>
                  </li>
                
                
                
              </ul>
              <!-- ul.aside-nav end -->

            </div>
            <!-- .aside-menu end -->

          </div>
          <!-- .aside-body end -->

        </div>
        <!-- .aside-inner end -->

      </aside>
      <!-- .aside-wrapper end -->

      <!-- .content-wrapper start -->
      <div class="content-wrapper">

        <div class="container-fluid">
          <div class="page-content">

            <!-- .page-title start -->
           {{--  <div class="page-title">
              <div class="row">
                <div class="col-md-6">
                  <a href="#">Extra Pages</a>
                  <span>Blank Page</span>
                </div>
                <div class="col-md-6 d-md-flex d-none align-items-center justify-content-end">
                  <button class="btn btn-sm btn-primary br-3 p-x-15 mr-2">Report</button>
                </div>
              </div>
            </div> --}}
            <!-- .page-title end -->

            {{-- <div class="row"> --}}

              {{-- <div class="col-12">
                <div class="card">
                  <div class="card-header pdn-20 pdn-sm-x-40">
                    <h6>Blank Page</h6>
                  </div>
                  <div class="card-body pdn-sm-40 pdn-t-20-imp">
                    <p class="card-text mb-3 wth-sm-70p">Paragraph title</p>
                    <div class="pdn-sm-55 pdn-15 bdr">
                      Page contents go here. Create something awesome!
                    </div>
                  </div>
                </div>
              </div> --}}
              @if(session('info'))
                
                        <div class="col-lg-12">
                            <div class="alert alert-success txt-bold solid bdr-0 text-white">
                                {{session('info')}}
                            </div>
                        </div>
                 @elseif(session('danger'))
                
                        <div class="col-lg-12">
                            <div class="alert alert-danger txt-bold solid bdr-0 text-white">
                                {{session('danger')}}
                            </div>
                        </div>
                @elseif(session('warning'))
                
                        <div class="col-lg-12">
                            <div class="alert alert-warning txt-bold solid bdr-0 text-white">
                                {{session('warning')}}
                            </div>
                        </div>
                
                
                @endif

              

              @yield('content')
            {{-- </div> --}}

          </div>
        </div>

        <!-- .footer start -->
        <footer class="footer">
          <div class="left-footer">
            &copy; 2020
            <a href="#">DREA INFORMATICA</a>
          </div>
         
        </footer>
        <!-- .footer end -->

      </div>
      <!-- .content-wrapper end -->

    </div>
    <!-- #app end -->

    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="{{asset('js/vendor/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{asset('js/vendor/jquery/jquery_34.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery/input-case-enforcer.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/components/aside.js')}}"></script>
    <script src="{{asset('js/components/main.js')}}"></script>

    @yield('scripts')


  </body>

</html>