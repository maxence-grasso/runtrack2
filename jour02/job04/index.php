<?php

if (php_sapi_name() === 'cli') $lb = \n;
else $lb = "<br />";

for ($i = 1; $i <= 100; $i++)
{
    if ($i % 15 === 0) {
        echo "FizzBuzz $lb";
    }
    else if($i % 3 == 0){
        echo "Fizz $lb";
    }
    else if($i % 5 == 0){
        echo "Buzz $lb";
    }
    else {
        echo $i." $lb";
    }
}