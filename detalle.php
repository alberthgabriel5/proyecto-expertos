<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detalle destino</title>
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
<div class="modal fade" id="modalDetalleDestino" role="dialog">
	<div class="modal-dialog modal-xl" id="modalDetalleDestinocss">
	<!-- Modal content-->
        <div class="modal-content">
            <div class="modal-head">
                
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h1>Detalle del Destino</h1>
                        </div>
                        <div class="col-6" style="text-align:right">
                            <a href="#" data-dismiss="modal" ><label style="text-decoration-line: underline;">Volver</label></a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <img src="img/img1.jpg" class="img-thumbnail" alt="Cinque Terre" width="504" height="436"> 
                                </br>
                                <h3 style="color : #000000;  font-family: 'Rancho', cursive;">Actividades</h3>
                                <div style="border : solid 2px #f5f5f5f5; background : #ffffff;  color : #000000;   padding : 4px;   width : 504px;    height : 100px;    overflow : auto; font-family: 'Rambla',cursive;">
                                    - Viaje en bote.  <br />- Disfrute de la playa.  <br />- Posible muerte.  <br />- Sesión fotográfica.<br />
                                    1<br />
                                    2<br />
                                    3<br />
                                    4<br />
                                    5<br />
                                    6<br />
                                    7<br />
                                    8<br />
                                    9<br />
                                    10<br />
                                </div>
                            </div>
                            <div class="col-6">                            
                                <h3 style="color : #000000;  font-family: 'Rancho', cursive;">Playa Nomada</h3>
                                <div style="background : #ffffff;  color : #000000;   padding : 4px;   width : 504px;    height : 224px;    overflow : auto; font-family: 'Rambla',cursive;">
                                    Bienvenido a playa nómada, un lugar tranquilo para relajarse, disfrutar del mar y de una preciosa vista y de un paseo en una peligrosa bote que puede volcarse en cualquier momento. 
                                </div>
                                <br />
                                <div style="color : #000000;   padding : 4px;   width : 504px;    height : 50px;  font-family: 'Rambla',cursive;">
                                    Precio: A tan solo $
                                    <label id="lblPrecio">99</label>
                                    <br />
                                    Duración:
                                    <label id="lblDuracion">3</label>
                                    días
                                </div>                                
                            </div>
                        </div>
                    <div>
                    <div class="class-align-left">
                        <button id="btn" type="button">Adquirir</button>
                        <button id="btnCerrar" class="class-btnCerrar" type="button" data-dismiss="modal">Cerrar</button>
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



    </script>  
</html>