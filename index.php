<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    #mdialTamanio{
      width: 80% !important;
    }
</style>
<body>
    <header>
        <div class="container">
            <img src="" alt="">
            <div class="row justify-content-end">
                <div class="col-1">
                    <a>Destinos</a>
                </div>
                <div class="col-1">
                    <a href="#" data-toggle="modal" data-target="#modalDetalleDestino" >Detalle</a>
                </div>
                <div class="col-2">
                    <a>Iniciar Sesión</a>
                </div>
            </div>
        </div>

      
    </header>
    <div class="container">
        <div>
            <img src="" alt="">
        </div>
        <div class="row">
            <div class="col-7">
                <h3>TE DAMOS LAS MEJORES OPCIONES, PARA TUS VACACIONES, TODO A TAN SOLO UN CLICK.</h3>
            </div>
            <div class="col-1">
                <p>flecha</p>
            </div>
            <div class="col-1">
                <button>Obtener recomendación</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col">
                <p>Contactenos</p>
                <p>9050-1050</p>
            </div>
            <div class="col">
                <p>Correo</p>
                <p>destinosNom@gmail.com</p>
            </div>
        </div>
    </footer>
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous">
</script>

</html>
<?php include 'detalle.php';?>