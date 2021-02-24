<html>

<head>
   <title>Aprendendo PHP</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>


<body style="background-color:#DCDCDC">

   <header>
      <nav class="navbar navbar-expand-md flex-sm-column" style="background-color: #563D7C; color: white;">
         <ul class="navbar-nav" id="navegacao">
            <li class="nav-item">
               <a class="nav-link text-reset" href="index.php" style="color: white;">
                  <i class="fas fa-arrow-left"></i>
                  VOLTAR</a>
            </li>
         </ul>
      </nav>
   </header>

   <div class="container">
      <div class="row">
         <div class="col-md-6 mt-5">
            <h2> Programa Contador </h2>
            <hr>
            <form name="media" method="post">
               <h4>Digite um número:</h4>
               <input class="form-control" type="number" name="n1"><br>
               <button type="submit" class="btn btn-outline-danger" value="Ok">Exibir Resultado</button>
            </form>
         </div>
      </div>
   </div>

   <div class="container">
      <?php

      //verificação
      if (isset($_POST['n1'])) //Se o botão for prescionado e conter algum valor, então executa 
      {
         for ($n = 1; $n <= 10; $n++) {
            echo $n;
            echo "<br>";
         }
      }

      ?>
   </div>

</body>

</html>