<?php/*

while ($continuer_boucle == true)

{

    // instructions à exécuter dans la boucle

}*/

?>

<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
?>

<?php

$nombre_de_lignes = 1;


while ($nombre_de_lignes <= 100)

{

    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';

    $nombre_de_lignes++;

}

?>


<?php

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)

{

    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';

}

?>