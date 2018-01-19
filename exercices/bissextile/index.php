<?php
$annee=2050;
function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
		return true;
	} else {
		return false;
	}
}

echo '<hr/>' . $annee . ' ';
echo bissextile($annee) ? 'est' : "n'est pas";
echo ' bissextile.';