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
					Programa Par ou Impar </h2>
				<hr>
				<form name="par" method="post">
					<h4>Digite um número:</h4>
					<input class="form-control" type="number" name="codigo"><br>
					<button type="submit" class="btn btn-outline-success" value="Ok">Exibir</button>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<?php

		if (isset($_POST['codigo'])) {
			$i = $_POST['codigo'];
			par($i);
		}
		function par($i)
		{
			if ($i % 2 == 0) {
				echo "O número digitado é PAR";
			} else {
				echo "O número digitado é IMPAR";
			}
		}

		?>
		<div>
</body>

</html>