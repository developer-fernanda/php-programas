<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body style="background-color:#A29A98">

    <header>
        <nav class="navbar navbar-expand-lg " style="background-color: #563D7C; color: white;">
            <button class="navbar-toggler" style="border: 2px solid white; color: white;" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"><i class="fas fa-bars p-1"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <div class="container d-flex justify-content-between">
                    <ul class="navbar-nav d-none d-lg-block" style="color: white;">
                        <li class="nav-item mt-2">
                            NANDA
                        </li>
                    </ul>
                    <ul class="navbar-nav" id="navegacao">

                        <li class="nav-item px-2">
                            <a class="nav-link" href="index.php" style="color: white;">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Programas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">
                                <a class="dropdown-item" href="tabuada.php">Tabuada</a>
                                <a class="dropdown-item" href="par.php">Par ou Impar</a>
                                <a class="dropdown-item" href="tabuada.while.php">Tabuada While</a>
                                <a class="dropdown-item" href="media.php">Media do Aluno</a>
                                <a class="dropdown-item" href="contador.php">Contador</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-none d-lg-block" style="color: white;">
                        <li class="nav-item px-1">
                            <i class="fab fa-php h1 px-1" style="color: white;"> </i>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

    </header>

    <div class="container" style="background-image: url(assets/img/php.jpg); height: 700px; color:white">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1> <mark>PROGRAMAÇÃO WEB</mark></h1> <br>
                <h4><mark> Programas - Aula 1 </mark> </h4>
            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>