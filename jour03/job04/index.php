<?php

$str = 'Dans l\'espace, personne ne vous entend crier.' . "<br />";
echo $str;
$compteur = count (str_split($str)); //Compte le nombre de caractère dans la chaîne.
echo $compteur, ' = le nombre de caractère.';
?>