<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="col">
                    <a class="navbar-brand" href="">
                        <img src="images/mohe.png" height="60" alt="image">
                    </a>
                </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav1">

                    <?php if(estaLogueado()) :?>
                        <div class="ml-auto">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#bcbcbc" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                                    <?php echo $_SESSION['usuario'];?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mi cuenta</a>
                                <a class="dropdown-item" href="#">Mis compras</a>
                                <a class="dropdown-item" href="?pagina=salir">Salir de mi sesión</a>
                                </div>
                            </div>                            
                        </div>
                    <?php else :?>

                        <div class="ml-auto">
                            <a class="btn btn-outline-primary ml-md-3" href="?pagina=ingresar">Ingresar</a>
                            <a class="btn btn-outline-primary ml-md-3" href="?pagina=registro">Registrarme</a>
                        </div>
                    <?php endif;?>

                </div>
            </nav>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample08">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Forma de pago</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="#">Marcas</a> 
                        <?php



                         ?>


                        </div>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>