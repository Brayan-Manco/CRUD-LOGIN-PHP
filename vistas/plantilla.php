<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40fa66ad6f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid barra">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset($_GET["paginas"])): ?>
                <?php if($_GET["paginas"] == "ingreso"): ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php?paginas=ingreso">Ingreso</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?paginas=ingreso">Ingreso</a>
                    </li>
                <?php endif ?>
                <?php if($_GET["paginas"] == "inicio"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?paginas=inicio">Inicio</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?paginas=inicio">Inicio</a>
                    </li>
                <?php endif ?>
                <?php if($_GET["paginas"] == "salir"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?paginas=salir">Salir</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?paginas=salir">Salir</a>
                    </li>
                    <?php endif ?>
                <?php else: ?>
                    <div class="container-fluid">
                        <div class="container-fluid barra">
                            <div class="container">
                                <ul class="nav nav-justified py-2 nav-pills">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php?paginas=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.php?paginas=inicio">Inicio</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.php?paginas=salir">Salir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
                <?php
                if(isset($_GET["paginas"]))
                {
                    if($_GET["paginas"] == "registro" ||
                    $_GET["paginas"] == "ingreso" ||
                    $_GET["paginas"] == "editar" ||
                    $_GET["paginas"] == "inicio" ||
                    $_GET["paginas"] == "salir" )
                    {
                        include "paginas/".$_GET["paginas"].".php";
                    }
                    else
                    {
                        include "paginas/error404.php";
                    }
                }
                else
                {
                    include "paginas/ingreso.php";
                }
                ?>
        </div>
    </div>
</body>
</html>