<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>únete al club</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="{{asset('asset/css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/steppers.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/styles.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container z-depth-1-half">
    <div class="row align-items-center py-5" style="background-image: linear-gradient(to right, #33353a 0%, #7873f5 100%);">
      <div class="col-md-6 text-center">
        <img class="img-fluid mb-4" src="{{asset('asset/images/togehter.png')}}">
        <h4 class="text-white mb-0">Disfruta <span class="b-500">la vuda</span></h4>
      </div>
      <div class="col-md-6 text-center">
        <img class="img-fluid" src="{{asset('asset/images/banner2.png')}}">
      </div>
    </div>
    <div class="row pt-5 grey lighten-3 justify-content-center">
      <div class="col-md-8">
        <h3 class="text-dark b-500">Pasos a seguir:</h3>
        <ul>
          <li>Debes completar tus datos.</li>
          <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</li>
        </ul>
        <p>* Duis aute 12 irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
      </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <form action="{{route('inscriptionStore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <ul class="stepper linear px-5">
        <li class="step active">
            <div data-step-label="Datos personales" class="step-title waves-effect waves-dark">
                Paso 1
            </div>
            <div class="step-new-content">
                <div class="row">
                    <div class="md-form col-md-6 ml-auto">
                        <input id="rut" type="text" name="rut" class="form-control" placeholder="12.536.589-4">
                        <label for="rut">RUT</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="nombre" type="text" name="name" class="form-control validate" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="apellidoP" type="text" name ="f_name" class="form-control validate" required>
                        <label for="apellidoP">Apellido Paterno</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="apellidoM" type="text" name="m_name" class="form-control validate" required>
                        <label for="apellidoM">Apellido Materno</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="telefono" type="number" name="phone" class="form-control validate" required>
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="email-linear" type="email" name="email" class="form-control validate" required>
                        <label for="email-linear">E-mail</label>
                    </div>
                </div>
                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm purple-gradient next-step">Seguir</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div data-step-label="Datos personales" class="step-title waves-effect waves-dark">
                Paso 2
            </div>
            <div class="step-new-content">
                <div class="row">           
                    <div class="md-form col-md-6 ml-auto">
                        <input id="address" type="text" name="address" class="form-control validate" required>
                        <label for="address">Calle y número</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="dpto" type="number" name="depart" class="form-control validate">
                        <label for="dpto">N° departamento (opcional)</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="ocupacion" type="text" name="occupation" class="form-control validate" required>
                        <label for="ocupacion">Ocupación</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="profesion" type="text" name='profession' class="form-control validate" required>
                        <label for="profesion">Profesión</label>
                    </div>           
                    <div class="md-form col-md-6 ml-auto">
                        <input type="text" id="date-picker-example" name="birth" class="form-control datepicker">
                        <label for="date-picker-example">Fecha de nacimiento</label>
                    </div>
                    <select class="mdb-select md-form col-md-6 ml-auto" name="gender">
                        <option value="" disabled selected>Género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">Otro</option>
                    </select>
                    <select class="mdb-select md-form col-12 ml-auto" name="distMode">
                        <option value="" disabled selected>Modo de distribución</option>
                        <option value="1">Solo plástico</option>
                        <option value="2">Sunt in culpa qui officia deserunt mollit anim id est laborum.</option>
                        <option value="3">Duis aute irure dolor in reprehenderit in voluptate velit esse</option>
                        <option value="4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</option>
                    </select>
                </div>
                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm purple-gradient next-step">Seguir</button>
                    <button class="waves-effect waves-dark btn btn-sm btn-elegant previous-step">Volver</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div data-step-label="Documentos" class="step-title waves-effect waves-dark">
                Paso 3
            </div>
            <div class="step-new-content">
                <div class="row">
                    <div class="form-group col-md-6 mr-auto py-5">
                        <p class="b-500">Documento</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn purple-gradient btn-sm float-left">
                                    <span>Seleccionar</span>
                                    <input type="file" name="docImg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Subir archivo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 mr-auto py-5">
                        <p class="b-500">RUT</p>
                        <p>Cédula de identidad vigente.</p>
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn purple-gradient btn-sm float-left">
                                    <span>Seleccionar</span>
                                    <input type="file" name="rutImg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Subir archivo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm purple-gradient next-step">Seguir</button>
                    <button class="waves-effect waves-dark btn btn-sm btn-elegant previous-step">Volver</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div data-step-label="Términos y condiciones" class="step-title waves-effect waves-dark">
                Paso 4
            </div>
            <div class="step-new-content">
                <div class="row justify-content-center py-5">
                    <div class="form-check col-md-6">
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Acepto términos y condiciones de uso</label><br>
                        <a class="btn btn-sm btn-elegant mt-4" href="#" target="_blank">términos y condiciones</a>
                    </div>
                </div>
                <div class="step-actions">
                    <input type="submit" class="btn purple-gradient btn-rounded m-0 mt-4" value="Obtén / renueva tu inscripción">
                </div>
            </div>
        </li>
        </ul>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('asset/js/mdb.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/steppers.js')}}"></script>
  <!-- More Jquery -->
  <script type="text/javascript">
    $(document).ready(function() {
      // Animations init
      new WOW().init();
      // Stepper init
      $('.stepper').mdbStepper();
      // Data Picker Initialization
      $('.datepicker').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        today: 'hoy',
        clear: 'borrar',
        close: 'Cerrar',
        labelMonthNext: 'Próximo mes',
        labelMonthPrev: 'Mes anterior',
        labelMonthSelect: 'Seleccionar un mes',
        labelYearSelect: 'Seleccionar un año',
        formatSubmit: 'dd/mm/yyyy'
      })
      $('.mdb-select').materialSelect();
    });
  </script>
</body>
</html>
