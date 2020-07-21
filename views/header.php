<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../js/task.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Aenima Proyect - <?php echo $title; ?></title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
             <a href="<?php echo constant('URL'); ?>products/" class="btn btn-secondary btn-lg active btn-lg  mr-sm-2" role="button" aria-pressed="true">Home</a>
            <button class="btn btn-success my-2 my-sm-0"  data-toggle="modal" data-target="#register">Agregar Producto</button> 

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Producto a buscar" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0" >Buscar</button>
                    </ul> 
                </div>
            </div>

        </nav>


</body>
</html>