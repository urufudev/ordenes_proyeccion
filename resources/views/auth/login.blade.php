
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>Madmin | Login</title>

    <!-- Madmin CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

  </head>

  <body class="vertical dark-mode wrapper-login" style="background-image: url({{asset('images/bg.svg')}});">

    <!-- .container start -->
    <div class="container">

      <!-- #app start -->
      <div id="app">

        <div class="login-form">
          <div class="card">
            <div class="card-body">
                <div align="center">
                    <img  src="{{asset('landing/img/logo_admin.png')}}" title="" alt=""  width="120" height="120">
                </div>
                
              <div class="main-logo text-center my-3">
               

                {{-- <img src="assets/images/logo-color.svg" alt="madol"> --}}
              </div>
              <h6 class="text-center mb-3">INICIAR SESION</h6>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" placeholder="Correo" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row form-group mt-3">
                  <div class="col-6">
                    <div class="custom-control custom-checkbox">
                      
                      <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="custom-control-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                    </div>
                  </div>
                  
                </div>
                <div class="form-group my-3 row">
                  <div class="col-12 text-right">
                    

                    <button type="submit" class="btn btn-primary-soft btn-block mgn-b-10">
                       <b>{{ __('INICIAR SESION') }}</b> 
                    </button>
                  </div>
                </div>
              </form>




              



              <div class="divider"></div>
              
              <div class="form-group mb-0 mt-2">
                <div class="col-12 text-center text-muted text-signup">
                  Don't have an account?
                  <a href="register.html" class="text-info">Sign up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ./login-form -->

      </div>
      <!-- #app end -->

    </div>
    <!-- .container end -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!--Plugin-->

  </body>

</html>