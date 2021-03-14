<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c9ff0b0edd.js"></script>
    <link href="{{asset('asset/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/styles.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .alert_rut{
            display: none;
        }

        .dander{
            /* border: dotted 1px red; */
            padding: 5px;
            color: red;
        }

        .alert_rut1{
            display: none;
        }
    </style>
</head>
<body>
  <main>
    <div class="view jarallax" data-jarallax-video="mp4:{{asset('asset/images/video3.mp4')}}" style="height: 100vh;">
        <div class="mask rgba-stylish-light flex-center">
                <div class="container h-100">
                    <div class="row align-items-center justify-content-center" style="height: 100vh;">
                        <div class="col-md-8 col-lg-6 text-center pt-4">
                            <img class="img-fluid mx-auto wow fadeInDown my-3" data-wow-delay="1s" src="{{asset('asset/images/logoCPLB.png')}}" >
                            <h5 class="wow fadeIn text-white b-500 pb-5" data-wow-delay="2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h5>
                            <div class="wow fadeInUp" data-wow-delay="2.5s">
                                <a class="btn purple-gradient btn-rounded" href="#info">¡Quiero inscribirme!</a>
                                <a class="btn purple-gradient btn-rounded" href="{{route('login')}}">Ya estoy incrito</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="container" id="info">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5 text-center">              
                <img class="img-fluid mb-3 wow fadeInDown" src="{{asset('asset/images/logoCPLB-black.png')}}" style="width: 300px;">
                <h5 class="text-dark b-500 wow fadeIn">Formulario</h5>                
                <p class="b-500 mb-4 wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a class="btn purple-gradient" data-toggle="modal" data-target="#modalLoginForm">Inscríbete</a>
                <a class="btn purple-gradient" href="#" target="_blank">Convenios</a>
                
                <div class="text-left">
                    <p class="mt-4 wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                    <p class="b-500 wow fadeIn">Requisitos:</p>
                    <ol class="wow fadeIn">
                        <li>Duis aute irure dolor in</li>
                        <li>Excepteur sint occaecat cupidatat non proident:
                            <ul>
                            <li>Cuenta de luz</li>
                            <li>Documento formal</li>
                            <li>Cartola del banco</li>
                            </ul>
                        </li>
                    </ol>
                    <p class="b-500 wow fadeIn">Puntos físicos de inscripción:</p>
                    <ul class="wow fadeIn">
                        <li>Edificio de comunidad</li>
                        <li>Oficina laboral 123</li>
                    </ul>
                    <small class="wow fadeIn">* .</small>
                </div>
            </div>
        </div>
    </div>
  </main>
  <section class="special-color-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center text-white b-500 wow fadeIn">
                    <p class="mb-0">Puntos Físicos de Inscripción: Lorem ipsum / Lorem ipsum</p>
                    <p class="mb-0">Nuevo Canal de Atención: Número de Celular / WhatsApp : +569 010101010</p>
                    <p class="mb-0">lorem@ipsum.com</p>
                </div>
            </div>
        </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center purple-gradient text-white">
                    <h5 class="modal-title w-100 b-500">Obtén o renueva tu inscripción</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="" method="POST" class="login_form">
                        @csrf
                        <div class="md-form mb-2">
                            <i class="far fa-id-card prefix grey-text"></i>
                            <input type="text" name="rut" id="defaultForm-rut" class="form-control" required>
                            <label data-error="wrong" data-success="right" for="defaultForm-rut">RUT</label>
                        </div>
                        <div class="alert_rut dander">
                            You must input the rut value with this format. 11111111-1/k
                        </div> 
                       
                        <div class="alert alert-danger alert_rut1">
                            This RUT already registered.
                        </div> 
                                           
                        <div class="text-center">
                            <input type="submit" class="btn purple-gradient mb-4 submit_btn" value="Obtén o renueva">
                        </div>
                        <small class="text-black-50">* .</small>
                    </form>
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

    $('#myModal').show();

    $('.closeModal').click(function(){
        $('#myModal').hide();
    });

    var Fn = {
        validaRut : function (rutCompleto) {
            if (!/^[0-9]+-[0-9kK]{1}$/.test( rutCompleto ))
                return false;
            var tmp 	= rutCompleto.split('-');
            var digv	= tmp[1]; 
            var rut 	= tmp[0];
            if ( digv == 'K' ) digv = 'k' ;
            return (Fn.dv(rut) == digv );
        },
        dv : function(T){
            var M=0,S=1;
            for(;T;T=Math.floor(T/10))
                S=(S+T%10*(9-M++%6))%11;
            return S?S-1:'k';
        }
    }

    $("#defaultForm-rut").on("keyup change", function(e) {
        $('.alert').css('display', 'none');
        var rut = $('#defaultForm-rut').val();
        lastChar = rut[rut.length -1];
        let rutformat = /\d{7}-\w{1}$/;
        // if(rutformat.test(rut) && rut.length < 11 && (lastChar == 'k' ||  lastChar >= '0' && lastChar <= '9')){
        if(Fn.validaRut(rut)){
           $('.alert_rut').css('display', 'none');
           $('.submit_btn').prop('disabled', false); 
           $('.submit_btn').click(function(){
                var myForm = $(".login_form");  
                $(this).prop('disabled', true);

                let _token = $('input[name=_token]').val();        
                let rut = $('#defaultForm-rut').val();
                var form_data =new FormData();
                    
                form_data.append("_token", _token);
                form_data.append("rut", rut);
                $.ajax({
                    url: "{{route('rutSingup')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(response) {
                        if(response == 'failed') {  
                        $('.alert_rut1').css('display', 'block');
                        } else if(response == 'success') {
                            window.location.href = "/inscription?rut="+rut;
                        }else{
                            
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
            });
        }
        else
        {
            $('.alert_rut').css('display', 'block');
            $('.submit_btn').prop('disabled', true);
        }          
    })

    $('#modalLoginForm').on('hidden.bs.modal', function(e){       
           $('.login_form')[0].reset();  
           $('.submit_btn').prop('disabled', false);     
           $('.alert_rut1').css('display', 'none');              
    });

    

  </script>
</body>
</html>
