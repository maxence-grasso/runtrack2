<?php

$i = 0;
$o = 'La Plateforme_';

while ($i <= 99) {
    $i++;

if ($i <= 20) {
   echo '<i>'. $i . '</i><br />';
 }

else if ($i >= 25 and $i <= 41) {
    echo '<u>' . $i .'</u><br />';
}

else if ($i >= 43 and $i <= 50) {
    echo '<u>' . $i .'</u><br />';
}

else if ($i == 42){
    echo $o . '<br />';
}
 else {echo $i . '<br />';}

}
?>