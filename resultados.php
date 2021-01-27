<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resultados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

<!--Referencia al archivo CSS-->
<link rel="stylesheet" href="index.css">

</head>
<body>
	<header class="header">

	</header>

<!-- Botón para llamar al modal           </br>
<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalDetalleDestino">Abrir modal Detalle</button>-->
<div class="modal fade" id="modalResultados" role="dialog">
	<div class="modal-dialog modal-xl" id="modalDetalleDestinocss">
	<!-- Modal content-->
        <div class="modal-content">
            <div class="modal-head">
                
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-11">
                            <h2>Éstos son los destinos que hemos encontrado correspondientes a su búsqueda</h2>
                        </div>
                        <div class="col-1" style="text-align:right">
    
                        <a href="#" data-dismiss="modal" ><label style="text-decoration-line: underline;">Volver</label></a>
                        </div>
                        
                        
                    </div>
                    <div class="class-align-left">
                        <button id="btn"  class="class-btnCerrar"  type="button">Nuevo</button>
                    </div>

                    <div class="row">
                    <br />
                        <div style="background : #ffffff;  color : #000000;   padding : 4px;   width : 1110px; background-color: #f5f5f5;    height : 624px;    overflow : auto; font-family: 'Rambla',cursive;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><h3>Destino</h3></th>
                                    <th scope="col"><h3>Detalles</h3></th>
                                    <th scope="col"><i class="fa fa-sort-desc" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><img src="img/img1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Playa Nomada</td>
                                        <td>Bienvenido a playa nómada, un lugar tranquilo para relajarse, disfrutar del mar y de una preciosa vista y de un paseo en una peligrosa bote que puede volcarse en cualquier momento. </td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i id="iDestino" class="fa fa-align-justify" aria-hidden="true" data-toggle="modal" data-target="#modalDetalleDestino"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="img/img2.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Volán Arenal</td>
                                        <td>Solía ser uno de los volcanes más activos de Costa Rica, el hermoso y majestuoso Volcán Arenal es realmente un espectáculo para la vista. Visite La Fortuna, un pequeño pueblo cerca de la base del volcán y no se arrepentirá de la belleza escénica. </td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="img/img3.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Playa Tamarindo</td>
                                        <td>Tamarindo tiene algo que ofrecer para todos los gustos. Ya sea que una familia esté buscando una escapada de aventura o una pareja esté buscando relajarse en su luna de miel, esta ciudad tiene las comodidades y la serenidad otros destinos unidas en un solo lugar.</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="img/img4.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Matapalo</td>
                                        <td>Matapalo es un pequeño y tranquilo pueblo de playa ubicado en la punta de la península de Osa en la parte sur de Puntarenas, lleno de pequeñas cabañas y bungalows ecológicos que incitan a los huéspedes a disfrutar de una experiencia integral con la naturaleza.</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="img/img5.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Tortuguero</td>
                                        <td>Un lugar clave para la cría de tortugas en el Caribe, el Parque Nacional Tortuguero es el hábitat y lugar de anidación de cuatro de las ocho especies de tortugas marinas en el mundo.</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="img/img6.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </th>
                                        <td>Manuel Antonio</td>
                                        <td>Lo que este parque carece de tamaño, lo compensa con la increíble riqueza de atracciones que se encuentran aquí.</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <br />
                                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      
                        
                        <br />
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
	$('#iDestino').click(function(){
        $('.modal-backdrop').remove();//eliminamos el backdrop del modal
        $('.modal').hide();
    })

</script>

</html>
<?php include 'detalle.php';?>