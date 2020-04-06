<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700&display=swap" rel="stylesheet">
	<title>Código Aleatorio Alfanumérico</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="codigo">
			<h2>CÓDIGO ALEATORIO</h2>
				<span>
					<table class="table" align="center">
						<tr>
							<th>Códigos</th>
						</tr>
						<tr>
						<?php

							$alpha = "123456789ABCDEFGHIJKLMNOPQRSTUWVXYZ";
							$code = "";
							$longitud=8;
							$cantidad = $_POST[cantidad];
							echo "<td>";
							for($j=0;$j<$cantidad;$j++){
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
				<a href="index.html"><button type="submit">Volver</button></a>
			</div>
		</div>
	</div>
</body>
</html>



 
