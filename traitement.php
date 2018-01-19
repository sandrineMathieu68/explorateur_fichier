<?php

$path = $_GET['chemin'];
if (isset($path)) {
    if(empty($path)){
        $path = "../"; // Pour sortir du dossier actuel qui est rappellé avec la méthode GET 'chemin'
    } else{
        $path = $_GET['chemin'];
    }
} else {
    $path = "../";
}

foreach($files = new directoryiterator($path) as $f){
    
    $tab[] = [
        "name" => $f->getfilename(),
        "path" => $f->getpathname(),
        "size" => human_filesize( $f->getsize()),
        "dir" => $f->isdir(),
        "file" => $f->isfile()
    ];
    
}


unset($tab[0], $tab[1]); // Ne pas afficher le premier

 


//Conversion poids des fichiers/dossiers
function human_filesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

echo json_encode($tab);



?>