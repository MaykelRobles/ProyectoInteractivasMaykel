<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Activitys">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Event</title>
</head>

    <nav class="navbar navbar-expand-lg navColor">
        <div class="container-fluid">
            <a href="../index.php"><div class="logo" aria-hidden="true"></div><span class="sr-only">Logo</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../html/detail.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pop</a></li>
                            <li><a class="dropdown-item" href="#">Rock</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Alt</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<body>

    <!--Foto top-->
    <div class="photoHeader">
        <div class="contairnerCategoryDetail">
            <h2 class="titleCategory">Categoria</h2>
        </div>
        <div class="containerCosto">
            <p class="textDetail">Gratis</p>
        </div>
    </div>
    <!--Fin de Foto top-->


    <!--Titulo-->
    <h1 class="titles">Titulo Detalle</h1>

    <!--Main-->
    <main>
        <div class="containerDetail">
            <div class="row spacer">
                <div class="col">
                    <div class="detailFoto"></div>
                </div>

                <div class="col-8">
                    <div class="containerDetailInfo">
                        <div class="containerDescription">
                            <p class="textDetail">Descripcion</p>
                            <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam no-nummy
                                nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                ve, vel
                                illum dolore eu feugiat nulla facili-sis at vero eros et accumsan et iuue duis dolore te
                                feugait
                                nulla facilisi.</p>
                        </div>
                        <p class="textDetail">Lugar</p>
                        <p class="text">Por ahi llegando y dando la vuelta para no perderse en el camino al lugar adonde
                            va a
                            llegar.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="containerBttnRegistro">
            <a class="col-5" href="../html/registrarse.php">
                <div class="botonRegistrarse">
                    <p class="textBoton">REGISTRARSE</p>
                </div>
            </a>

            <div class="row">
                <a class="col" href="../html/detail.php">
                    <div class="containerEventosRelacionados">
                        <div class="circulo"></div>
                    </div>
                    <p class="footertext">Evento Relacionado</p>
                </a>
                <a class="col" href="../html/detail.php">
                    <div class="containerEventosRelacionados">
                        <div class="circulo"></div>
                    </div>
                    <p class="footertext">Evento Relacionado</p>

                </a>
                <a class="col" href="../html/detail.html">
                    <div class="containerEventosRelacionados">
                        <div class="circulo"></div>
                    </div>
                    <p class="footertext">Evento Relacionado</p>
                </a>
            </div>


        </div>
    </main>
    <!--Fin del main-->


    <!--Footer-->

    <footer>
        <div class="footer">

            <p class="footertext">Siguenos:</p>

            <div class="socials">
                <ul class="footerNavigator">
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i><span class="sr-only">Facebook</span></a></li>
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span></a></li>
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a></li>
                </ul>
            </div>
            <p class="footertext"> copyright &copy;2021 TropycalBlast. </p>
        </div>
    </footer>

    <!--Fin Footer-->

</body>
<!--Fin Body-->

</html>
