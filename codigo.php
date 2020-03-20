<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<title>Código Aleatorio Alfanumérico</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="codigo">
				<div class="text-center mb-4">
					<h1 class="h3 mb-3 font-weight-normal">CÓDIGO ALEATORIO</h1>
					<h6>Estos son los códigos generados.</h6>
				</div>
				<?php
					$alpha = "123456789ABCDEFGHIJKLMNOPQRSTUWVXYZ";
					$code = "";
					$longitud=8;
					for($j=0;$j<$_POST['cantidad'];$j++){
						for($i=0;$i<$longitud;$i++)
						{
							$code .= $alpha[rand(0, strlen($alpha)-1)];
						}
						echo $code."<br>";
						unset($code);
					}
				?>
				<a href="index.html"><button class="btn btn-outline-primary" class="btn-sm" type="submit">Volver</button></a>
			</div>
		</div>
	</div>
</body>
</html>
