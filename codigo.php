<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani|Righteous&display=swap" rel="stylesheet">
	<title>Código Aleatorio Alfanumérico</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="codigo">
			<h2>CÓDIGO ALEATORIO</h2>
				<span>
					<table class="table">
						<tr>
							<th>Códigos</th>
							<th>Códigos</th>
							<th>Códigos</th>
						</tr>
						<tr>
						<?php
							$mitad = $_POST['cantidad'];
							$alpha = "123456789ABCDEFGHIJKLMNOPQRSTUWVXYZ";
							$code = "";
							$longitud=8;
							$cantidad2 = $mitad / 2;
							echo "<td>";
							for($j=0;$j<$cantidad2;$j++){
								for($i=0;$i<$longitud;$i++)
								{
									$code .= $alpha[rand(0, strlen($alpha)-1)];
								}
								echo $code;
								unset($code);
								echo "</br>";
							}
							echo "</td>";
							echo "<td>";
							for($j=0;$j<$cantidad2;$j++){
								for($i=0;$i<$longitud;$i++)
								{
									$code .= $alpha[rand(0, strlen($alpha)-1)];
								}
								echo $code;
								unset($code);
								echo "</br>";
							}
							echo "</td>";
							echo "<td>";
							for($j=0;$j<$cantidad2;$j++){
								for($i=0;$i<$longitud;$i++)
								{
									$code .= $alpha[rand(0, strlen($alpha)-1)];
								}
								echo $code;
								unset($code);
								echo "</br>";
							}
							echo "</td>";
						?>
						</tr>
					</table>
				</span>
				<a href="index.html"><button class="btn btn-outline-primary" class="btn-sm" type="submit">Volver</button></a>
			</div>
		</div>
	</div>
</body>
</html>



 
