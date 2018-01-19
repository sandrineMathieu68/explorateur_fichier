<?php
///////////////////////////////////////////////////////
// J'APPEL LA FONCTION AVANT DE L'AVOIR CREER POUR MIEU DEFINIR LES PARAMETRE
$aire = aire(20,10);
echo($aire);
//ON APPEL SA FONCTION AVEC LOGIQUE, là on calcule l'aire donc elle s'appelle aire !
function aire($largeur,$longueur)
// nous précisons 2 variables aux paramètre
//on lui met des parametres (x,y) cela se TRANSFORME AUTOMATIQUEMENT A L'APPEL DE NOTRE FONCTION !!!
//DES FONCTIONS SANS PARAMETRE C'EST POSSIBLE AUSSI
{
	//puis nous creons NOTRE TRAITEMENT
	$total = $largeur * $longueur;
	//IL FAUT RETOURNER LE RESULTAT (ACTION FINAL SOUHAITER) AVEC UNE INSTRUCTION
	return $total;
}

//////////////////////////////////////////////////
// ON oublie pas de donner une valeur aux variable appelé!!!
$paht = 100;
$tva = 19;
$pttc = ttc ($paht, $tva);
echo '<br />'. $pttc;
function ttc($paht, $tva){
	$pttc = $paht + $tva;
	return $pttc;
}

////////////////////////////////////////////////////
//IL EXISTE BEAUCOUP DE FONCTION DANS LA DOC PHP !!!
//PENSER A REGARDER  DANS LA BIBLIOTHEQUE -> FONCTION QUI EXISTE//ET SELECTIONNER LA LANGUE////
///puis référence des fonctions et on clique dessus///////on Y RETROUVE TOUTES LES SUJET QUE TRAITE LES FONCTIONS//////
//VERIFIER LA LISTE DES PARAMETRE AFIN DE L'UTILISER

//AVEC SUBMIT::::::::::::::::::
function envoyerparutilisteur(){
	$envoyerparutilisteur = '<input type="submit" value="envoyer">';
	return $envoyerparutilisteur;
}
//AUTRE FACON D4APPELER UNE FONCTION
echo envoyerparutilisteur();

?>