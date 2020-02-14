
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <title>404 | Sistema de Administracion de Personal</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

  </head>

  <body class="vertical dark-mode">

    <!-- #app start -->
    <div id="app">

      <div class="err-page">
        <div class="container text-center">

          <div class="row">
            <div class="card wth-100p bg-transparent">
              <div class="card-body">

                <div class="text-warning mb-3 error-text">
                  404
                </div>

                <h1 class="mb-3 txt-18 position-relative">
                  NO EXISTE ESTA RUTA
                  <span class="sad-face position-absolute mgn-l-5">:(</span>
                </h1>

                <a class="btn btn-primary-soft" href="{{ url('/home') }}"><b>REGRESAR A INICIO</b> </a>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- #app end -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/vendor/jquery/jquery_34.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!--script-->

  </body>

</html>