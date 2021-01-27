
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
                            <h1>Acceder</h1>
                            <br />
                        </div>
                        <div class="col-6" style="text-align:right">
                        <a class="refVolver" href="#" data-dismiss="modal" ><label style="text-decoration-line: underline; ">Volver</label></a>
                        </div>
                    </div>
                    <div class="row">
                        <br />
                        <br />
                        <input type="text" class="form-control" id="inUser" placeholder="Usuario">
                        <br />
                        <br />
                        <input type="password" class="form-control" id="inPassword" placeholder="Contraseña">
                        <br />
                        <div>
                            <br />
                            <button id="btn" type="button">Acceder</button>
                            <br />
                            <a id="aRegister" class="refVolver" href="#" data-toggle="modal" data-target="#modalRegistro"><h4 style="text-decoration-line: underline; ">Registrarse</h4></a>
                            <br />
                        </div>
                    </div>
                </div>
            </div>  
            <div class="modal-foot">


            </div>
        </div>
    </div>
</div>


<!--SCRIPTS JAVASCRIPT PARA HACER LAS LLAMADAS-->
<script type="text/javascript">
	//Botón de enviar a determinar el recinto de procedencia
	$('#aRegister').click(function(){
        $('.modal-backdrop').remove();//eliminamos el backdrop del modal
        $('.modal').hide();
    })
</script>

