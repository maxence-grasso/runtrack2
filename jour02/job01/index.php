<?php 
function nombre () {
    for ($i = 1; $i <= 1000; $i++) {
        yield $i;

    }
}

$generator = nombre ();
foreach ($generator as $value) {
        if ($value == 42){
            echo "<u><b>" . $value . "</u></b><br />";
        }
        else{

            echo $value . "<br />";
}}



?>
