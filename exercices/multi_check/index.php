<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">  
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TABLE DE MULTIPLICATION</title>

</head>
<body>

<h1>CHOISSISEZ UNE OU DES TABLES A REVISER</h1>
<form method="post">
	<?php
  for ($i=1;$i<=10;$i++)

      {
     	echo("<INPUT TYPE='checkbox' NAME='table[]'".$i."' VALUE=".$i." />");

    	echo " ".$i." <br />";
      }

      
?>


	<p><input type="submit" name="submit" value="ENVOYER"></p>




	<?php

		if(isset($_POST['submit']))
		{
			if(!empty($_POST['table']))
			{
				echo "<p>VOICI LES TABLES CHOISIES <br /></p>";

				foreach ($_POST['table'] as $table) 
				{
						for ($q = 1; $q <= 10; $q++)
						{
							echo $q . " X " . $table  . " = " . $q * $table . "<br />" ;
						}
						echo('<br />');
				}
			}
			else
			{
				echo 'Veuillez selectionner une table';
			}
		}

	?>
	

</form>


</body>

</html>