<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Event</title>
</head>

    <nav class="navbar navbar-expand-lg navColor">
        <div class="container-fluid">
            <a href="../index.html"><div class="logo"></div></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../html/detail.html" id="navbarDropdown" role="button"
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
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="numPer">Search</button>
                </form>
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
                    <img class="detailFoto" alt="Foto" src="../imgs/artista1.jpg">
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
            <a class="col-5" href="../html/registrarse.html">
                <div class="botonRegistrarse">
                    <p class="textBoton">REGISTRARSE</p>
                </div>
            </a>

            <div class="row">
                <a class="col" href="../html/detail.html">
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
                <a class="col" href="../html/detail.html">
                    <div class="containerEventosRelacionados">
                        <div class="circulo"></div>
                    </div>
                    <p class="footertext">Evento Relacionado</p>
            </div>
            </a>

        </div>
    </main>
    <!--Fin del main-->


    <!--Footer-->

    <footer>
        <div class="footer">

            <p class="footertext">Siguenos:</p>

            <div class="socials">
                <ul class="footerNavigator">
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="footerItem"><a class="footerLink" href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <p class="footertext"> copyright &copy;2021 TropycalBlast. </p>
        </div>
    </footer>

    <!--Fin Footer-->

</body>
<!--Fin Body-->

</html>