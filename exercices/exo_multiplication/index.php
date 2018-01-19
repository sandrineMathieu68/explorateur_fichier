<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>TABLE DE MULTIPLICATION</title>
	</head>
	<body>
		<?php
		echo "<center><h1><b><u>Les tables de multiplication</u></b></h1>";
		echo "<hr size= 10 color= red>";
		if(($_POST['txtTime']) && is_numeric($_POST['txtTime']))
		{
			echo "<h2>";
			$t = $_POST['txtTime'];
			for ($q = 1; $q <= 10; $q++)
			{
				echo $q . " X " . $t  . " = " . $q * $t . "<br />";
			}
		}
		echo "<hr size= 10 color= red>";
		?>
		<form method="post" action="index.php">
			entrer un nombre :
			<input type="text" name="txtTime">
			<input type="submit">
			
		</form>
	</body>
</html>