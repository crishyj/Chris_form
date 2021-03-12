@php
$i = 1;
@endphp
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
  <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
  <style>
    .bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form
      {
        font-family: Arial, Helvetica, sans-serif; 
        color: black
      }
      .bootstrap-iso form button, .bootstrap-iso form button:hover
      {
        color: white !important;
      } 
      .asteriskField{
        color: red;
      }
      .danger{
        color: red;
        display: none;
      }
  </style>
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
    
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <div class="modal-header">
                    <h4 class="modal-title">Congratulation</h4>
                </div>
        
                <div class="modal-body">
                    Successfully added
                </div>
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-success closeModal" data-dismiss="modal">Close</button>
                </div>
        
            </div>
        </div>
    </div>
   
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>      
    @endif
    <form action="" method="POST" enctype="multipart/form-data" class="register_form">
        @csrf
        <ul class="stepper linear px-5">
        <li class="step active">
            <div data-step-label="Datos personales" class="step-title waves-effect waves-dark">
                Paso 1
            </div>
            <div class="step-new-content">
                <div class="row">
                  
                    <div class="md-form col-md-6 ml-auto">
                        <input id="rut" type="text" name="rut" class="form-control" placeholder="12.536.589-4"  value="@isset($rut) {{$rut}} @endisset" disabled>
                        <label for="rut">RUT</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="name" type="text" name="name" class="form-control validate" required>
                        <label for="name">Nombre</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="f_name" type="text" name ="f_name" class="form-control validate" required>
                        <label for="f_name">Apellido Paterno</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="m_name" type="text" name="m_name" class="form-control validate" required>
                        <label for="m_name">Apellido Materno</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="phone" type="number" name="phone" class="form-control validate" required>
                        <label for="phone">Teléfono</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="email" type="email" name="email" class="form-control validate" required>
                        <label for="email">E-mail</label>
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
                        <input id="depart" type="number" name="depart" class="form-control validate">
                        <label for="depart">N° departamento (opcional)</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="occupation" type="text" name="occupation" class="form-control validate" required>
                        <label for="occupation">Ocupación</label>
                    </div>
                    <div class="md-form col-md-6 ml-auto">
                        <input id="profession" type="text" name='profession' class="form-control validate" required>
                        <label for="profession">Profesión</label>
                    </div>                               
                    <div class="md-form col-md-6 ml-auto">
                        <div class="input-group">
                            <div class="input-group-addon mr-3">
                                <i class="fa fa-calendar">
                                </i>
                            </div>
                            <input class="form-control validate" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" required/>
                        </div>
                    </div> 
                    <select class="mdb-select md-form col-md-6 ml-auto" name="gender" id="gender">
                        <option value="" disabled selected>Género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">Otro</option>
                    </select>
                    <select class="mdb-select md-form col-12 ml-auto" name="distMode" id="distMode">
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
                                    <input type="file" name="docImg" id = "docImg" class="validate" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Subir archivo" required>
                                </div>
                                @if ($errors->has('docImg'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('docImg') }}</strong>
                                    </span>
                                @endif
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
                                    <input type="file" name="rutImg" class="validate" id ="rutImg" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Subir archivo" required>
                                </div>
                                @if ($errors->has('rutImg'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('rutImg') }}</strong>
                                    </span>
                                @endif
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
                        <input type="checkbox" class="form-check-input validate" id="materialUnchecked" required>
                        <label class="form-check-label" for="materialUnchecked">Acepto términos y condiciones de uso</label><br>
                        <p class="danger">This field is required</p>
                        <a class="btn btn-sm btn-elegant mt-4" href="#" target="_blank">términos y condiciones</a>
                    </div>
                </div>
                <div class="step-actions">
                    <input type="submit" class="btn purple-gradient btn-rounded m-0 mt-4 submit_btn" value="Obtén / renueva tu inscripción">
                </div>
            </div>
        </li>
        </ul>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script type="text/javascript" src="{{asset('asset/js/mdb.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/steppers.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
      new WOW().init();
      $('.stepper').mdbStepper();
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

      $('.closeModal').click(function(){
            window.location.href = "/";
      });
      
      var date_input=$('input[name="birth"]'); 
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        });

        $("#materialUnchecked").on("change", function (event) {
            if ($(this).is(":checked")) {
                $('.danger').css('display', 'none');
                $('.submit_btn').prop('disabled', false);
            } else {
                $('.danger').css('display', 'block');
                $('.submit_btn').prop('disabled', true);
            }
        });
        

        $('.submit_btn').click(function(){

            var myForm = $(".register_form");  
            $(this).prop('disabled', true);

            let _token = $('input[name=_token]').val(); 
            let id = $('#id').val();
            let rut = $('#rut').val();
            let name = $('#name').val(); 
            let f_name = $('#f_name').val();
            let m_name = $('#m_name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let address = $('#address').val();
            let depart = $('#depart').val();
            let occupation = $('#occupation').val();
            let profession = $('#profession').val();
            let birth = $('#date').val();
            let gender = $('#gender').val();
            let distMode = $('#distMode').val();
            var docImg = $('#docImg').prop('files')[0]; 
            var rutImg = $('#rutImg').prop('files')[0]; 

            var form_data =new FormData();
            
            form_data.append("_token", _token);
            form_data.append("rut", rut);
            form_data.append("name", name);
            form_data.append("f_name", f_name);
            form_data.append("m_name", m_name);
            form_data.append("phone", phone);
            form_data.append("email", email);
            form_data.append("address", address);
            form_data.append("depart", depart);
            form_data.append("occupation", occupation);
            form_data.append("profession", profession);
            form_data.append("birth", birth);
            form_data.append("gender", gender);
            form_data.append("distMode", distMode);
            form_data.append("docImg", docImg);
            form_data.append("rutImg", rutImg);
            form_data.append("upload_file", true);

            if($('#materialUnchecked').is(':checked')){
                $('.danger').css('display', 'none');
                $('.submit_btn').prop('disabled', false);
                $.ajax({
                    url: "{{route('inscriptionStore')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(response) {
                        if(response == 'success') {  
                            $('#myModal').show();
                            window.location.href = "/";
                        } else {
                            let messages = response.data;
                            if(messages.option) {                               
                            }
                        }
                    },
                    error: function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response.responseJSON.message == 'The given data was invalid.'){                            
                            let messages = response.responseJSON.errors;
                            console.log(messages);
                            
                            alert(JSON.stringify(messages));
                            window.location.reload();        
                        } else {
                            console.log(response);
                            alert("Something went wrong");
                        }
                    }
                });
            }
            else{
                $('.danger').css('display', 'block');
            }
        })
    });
  </script>
</body>
</html>
