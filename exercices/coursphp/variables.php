<?php

$age_du_visiteur = 17; // La variable est créée et vaut 17

$age_du_visiteur = 23; // La variable est modifiée et vaut 23

$age_du_visiteur = 55; // La variable est modifiée et vaut 55

?>

<?php

$nom_du_visiteur = "Mateo21";

$nom_du_visiteur = 'Mateo21';

?>

<?php

$variable = "Mon \"nom\" est Mateo21";

$variable = 'Je m\'appelle Mateo21';

?>

<?php

$age_du_visiteur = 17;

echo "Le visiteur a ";

echo $age_du_visiteur;

echo " ans";

?>

<br />

<?php /*CONCATENER*/

$age_du_visiteur = 17;

echo "Le visiteur a $age_du_visiteur ans";

?>

<br />

<?php

$age_du_visiteur = 17;

echo 'Le visiteur a $age_du_visiteur ans'; // Ne marche pas

?>

<br />
<p>faire des calcul simple</p>

<?php

$nombre = 2 + 4; // $nombre prend la valeur 6

$nombre = 5 - 1; // $nombre prend la valeur 4

$nombre = 3 * 5; // $nombre prend la valeur 15

$nombre = 10 / 2; // $nombre prend la valeur 5


// Allez on rajoute un peu de difficulté

$nombre = 3 * 5 + 1; // $nombre prend la valeur 16

$nombre = (1 + 2) * 2; // $nombre prend la valeur 6

?>

<?php

$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste

$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1

?>