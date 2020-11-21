<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css"))?>">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">CASAHOGAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?PHP echo(base_url('public/')) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
    
        <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src=" <?php echo(base_url("public/img/logo1.png")) ?>" class="d-block w-100 imagenes" alt="banner1">
                    </div>
                    <div class="carousel-item">
                        <img src=" <?php echo(base_url("public/img/logo2.jpg")) ?>" class="d-block w-100 imagenes" alt="banner2">
                    </div>
                    <div class="carousel-item">
                        <img src=" <?php echo(base_url("public/img/logo3.jpg")) ?>" class="d-block w-100 imagenes" alt="banner3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <?php if(session('mensaje')):?>
            
                <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
                    <?php echo(session('mensaje'))?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
            <?php endif ?>

           
           

            <form class="mt-5" method="POST" action="<?php echo(base_url("public/personas/registro"))?>">
                    <h5>REGISTRO DE PERSONAS:</h5>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="number" class="form-control" placeholder="Edad" name="edad">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md-6">
                            <input type="number" class="form-control" placeholder="Cedula" name="cedula">
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" name="poblacion">
                                <option value="0">No aplica</option>
                                <option value="1">Niño</option>
                                <option value="2">Adulto Mayor</option>
                                <option value="3">PosConflicto</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="URL IMAGEN" name="foto">  
                        </div>   
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <textarea class="form-control" rows="3" name="descripcion"></textarea>
                        </div>   
                    </div>
                    <button type="submit" class="btn btn-info btn-block mt-3">registrar</button>
            </form>
        
        </div>
    </main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>