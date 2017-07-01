<?php

$tableau = [ 'un' => 'a','deux'=>  'b', 'trois' => 'c'];

/**
 * 1e arg : initialisation du compteur
 * 2e arg : sortie de la boucle
 * 3e arg : pas (opération faite à chq tour)
 **/
for($i = 0; $i < count($tableau); $i++){
    echo  '<br>index '. $i  .' : ';
    echo $tableau[$i] ;
}

echo '<br> ---- <br>';
foreach($tableau as $clef => $valeur){

    echo  '<br>index '. $clef  .' : ';
    echo $valeur ;
}

echo '<br> ---- <br>';
foreach($tableau as $valeur){

    echo  '<br>';
    echo $valeur ;
}