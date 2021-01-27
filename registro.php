<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
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
<!-- Botón para llamar al modal           </br>
<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalDetalleDestino">Abrir modal Detalle</button>-->
<div class="modal fade" id="modalRegistro" role="dialog">
	<div class="modal-dialog modal-sm" id="modalDetalleDestinocss">
	<!-- Modal content-->
        <div class="modal-content">
            <div class="modal-head">
                
            </div>
            <div class="modal-body">
                <div class="container">
                <div class="row">
                        <div class="col-6">
                            <h2>Registro</h2>
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
                        <input type="password" class="form-control" id="inConfirm" placeholder="Confirmar Contraseña"> 
                        <br />
                        <select class="custom-select mr-sm-2" id="slRecinto3">
                            <option selected >-Selecciona tu Genero-</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                            <option value="3">Indefinido</option>
                        </select>
                        <br />
                        <input type="text" class="form-control" id="inUser" placeholder="Edad">
                        <div>
                            <br />
                            <button id="btn" type="button" >Registrarse</button>
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


</html>