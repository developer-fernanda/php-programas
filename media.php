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
                  <i class="fas fa-arrow-left"></i> VOLTAR</a>
            </li>
         </ul>
      </nav>
   </header>

   <div class="container">
      <div class="row">
         <div class="col-md-6 mt-5">
            <h2> <i class="fas fa-sort-numeric-up"></i>
               Média do Aluno </h2>
            <hr>
            <form name="media" method="post">
               <b>Digite a primeira nota:</b> <input class="form-control" type="text" name="n1"><br><br>
               <b>Digite a sengunda nota:</b> <input class="form-control" type="text" name="n2"><br><br>
               <b>Digite a terceira nota:</b> <input class="form-control" type="text" name="n3"><br><br>
               <button type="submit" class="btn btn-outline-Secondary" value="Ok">Calcular Média</button>
            </form>
         </div>
      </div>
   </div>


   <div class="container">
      <?php
      header('Content-Type: text/html; charset=utf-8');
      //verificação
      if (isset($_POST['n1'])) //Se o botão for prescionado e conter algum valor, então executa 
      {
         $n1 = $_POST['n1'];
         $n2 = $_POST['n2'];
         $n3 = $_POST['n3'];
         $media = ($n1 + $n2 + $n3) / 3;
         $med = round($media, 2);
         resultado($med);
      }
      function resultado($med)
      {

         if ($med >= 7) {
            echo "Sua média é $med. Parabéns, você foi aprovado!";
         } else {
            echo "Sua média é $med, você foi reprovado!  ";
           
         }
      }

      ?>
   </div>

</body>

</html>