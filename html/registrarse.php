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

    <title>Registrarse</title>
</head>

<nav class="navbar navbar-expand-lg navColor">
    <div class="container-fluid">
        <a href="../index.html"><div class="logo"></div></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        </div>
    </div>
</nav>


<!--Body-->

<body>

    <!--Main-->
    <main>
        <div class="containerfluid spacerRegistro">
            <div class="containerRegistro ">

                <h1 class="titlesRegistro">Registro</h1>

                <div class="containerRegistroInfo">
                    <div class="row">
                        <div class="col">
                            <p class="textRegistro">Nombre de eventro</p>
                        </div>

                        <div class="col-1">
                            <p class="textRegistro">Lugar</p>
                        </div>

                        <div class="col">
                            <div class="containerFechaR">
                                <p class="textRegistro">1/1/2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lines"></div>


                <div class="containerRegistroInfo">
                    <div class="row">
                        <div class="col">
                            <p class="subTitulleRegistro">Cantidad de personas</p>
                        </div>

                        <div class="col-1">
                            <p class="textRegistro">Adulto</p>
                        </div>

                        <div class="col">
                            <input class="numPer numPerPad"></input>
                        </div>

                        <div class="col-1">
                            <p class="textRegistro">Niño</p>
                        </div>

                        <div class="col">
                            <input class="numPer numPerPad"></input>
                        </div>
                    </div>
                </div>
                <div class="lines"></div>



                <div class="containerRegistroInfo">
                    <div class="row">
                        <div class="col">
                            <p class="subTitulleRegistro">Costo por persona</p>
                        </div>

                        <div class="col-1">
                            <p class="textRegistro">Adulto</p>
                        </div>

                        <div class="col">
                            <input class="numPer numPerPad"></input>
                        </div>

                        <div class="col-1">
                            <p class="textRegistro">Niño</p>
                        </div>

                        <div class="col">
                            <input class="numPer numPerPad"></input>
                        </div>
                    </div>
                </div>
                <div class="lines"></div>

                <div class="containerRegistroInfo">
                    <p class="textCostoTotal">Costo Total</p>
                    <div class="col">
                        <div class="containerTolal">
                            <p class="textRegistro">0000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <a class="col nextbackBttn" href="../html/detail.php">
                    <img class="nextbtn" alt="Imagen de boton para regresar" src="../imgs/antras.png">
                </a>

                <a class="col-1 nextbackBttn" href="../html/confirmacionRegistro.php">
                    <img class="nextbtn" alt="Imagen de boton para seguir" src="../imgs/adelante.png">
                </a>
            </div>

        </div>
    </main>
    <!--Fin del Main-->


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
