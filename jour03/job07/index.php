<?php

$str = "Crtaines choses changent, et d'autres ne changeront jamais.";

$replace = preg_replace('/C/', 'E', $str, 1);
$replace1 = preg_replace('/e/', 'r', 'c');
echo $replace, $replace1;

?>