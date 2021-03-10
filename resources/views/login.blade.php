<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club preferente Lo Barnechea</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c9ff0b0edd.js"></script>
    <link href="{{asset('asset/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/styles.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="view jarallax" style="min-height: 100vh;">
        <img class="jarallax-img" src="{{asset('asset/images/bg2.jpg')}}" alt="">
        <div class="mask rgba-stylish-strong">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-md-6 px-5">
                        <div class="card card-cascade narrower">
                            <div class="view view-cascade gradient-card-header purple-gradient">
                                <img class="img-fluid mx-auto" src="{{asset('asset/images/logoCPLB.png')}}" style="width: 250px;">
                            </div>
                            <div class="card-body card-body-cascade text-center">
                                <form class="" style="color: #757575;" action="#!">
                                    <div class="md-form">
                                        <input type="email" id="materialLoginFormEmail" class="form-control validate" required>
                                        <label for="materialLoginFormEmail">E-mail</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="password" id="materialLoginFormPassword" class="form-control validate" required>
                                        <label for="materialLoginFormPassword">Contraseña</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-around pt-4">
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                        <label class="form-check-label tx-chico" for="materialLoginFormRemember">Recordarme</label>
                                        </div>
                                        <a data-toggle="modal" data-target="#modalRecuperarPassword">¿Olvidaste tu contraseña?</a>
                                    </div>
                                    <button class="btn purple-gradient btn-rounded waves-effect mb-4 mt-5" type="submit">Ingresar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="modal fade" id="modalRecuperarPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body mx-3 pt-5 pb-4">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="b-500">Le enviaremos un mail para recuperar su contraseña</p>
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
          </div>
          <div class="text-center">
            <button class="btn purple-gradient">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{asset('asset/js/mdb.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      new WOW().init();
    });
  </script>
</body>
</html>