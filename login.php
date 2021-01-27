<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--Referencia al archivo CSS-->
<link rel="stylesheet" href="index.css">

</head>
<body>
	<header class="header">

	</header>
    <button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalLogin">Abrir modal login</button>
<!-- Botón para llamar al modal           </br>
<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalDetalleDestino">Abrir modal Detalle</button>-->
<div class="modal fade" id="modalLogin" role="dialog">
	<div class="modal-dialog modal-sm" id="modalDetalleDestinocss">
	<!-- Modal content-->
        <div class="modal-content">
            <div class="modal-head">
                
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>Iniciar Sesión</h2>
                        </div>
                        <div class="col-6" style="text-align:right">
                        <a href="#" data-dismiss="modal" ><label style="text-decoration-line: underline; font-size: 15px !important;">Volver</label></a>
                        </div>
                    </div>
                    <div class="row">
                        <br />
                        <input type="text" class="form-control" id="inUser" placeholder="Usuario">
                        <br />
                        <input type="password" class="form-control" id="inPassword" placeholder="Contraseña">
                        <br />
                        <div>
                            <br />
                            <button id="btn" type="button">Acceder</button>
                            <br />
                            <a id="aRegister" href="#" data-toggle="modal" data-target="#modalRegistro"><label style="text-decoration-line: underline; font-size: 15px !important;">Registrarse</label></a>
                            <br /><br />
                        </div>
                    </div>
                </div>
            </div>  
            <div class="modal-foot">


            </div>
        </div>
    </div>
</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!--SCRIPTS JAVASCRIPT PARA HACER LAS LLAMADAS-->
<script type="text/javascript">
	//Botón de enviar a determinar el recinto de procedencia
	$('#aRegister').click(function(){
        $('#aRegister').click(); //Esto simula un click sobre el botón close de la modal, por lo que no se debe preocupar por qué clases agregar o qué clases sacar.
        $('.modal-backdrop').remove();//eliminamos el backdrop del modal
    })
</script>

</html>
<?php include 'registro.php';?>