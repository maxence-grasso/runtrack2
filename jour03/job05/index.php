<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau php</title>
</head>
<body>
    
</body>
</html>

<?php 

$str = "on n'est pas le meilleur quand on le croit mais quand on le sait.";
echo $str;

// Les Voyelles :
$voyelle1 = substr_count($str, "a");
$voyelle2 = substr_count($str, "e");
$voyelle3 = substr_count($str, "i");
$voyelle4 = substr_count($str, "o");
$voyelle5 = substr_count($str, "u");
$voyelle6 = substr_count($str, "y");
$voyelletableau = $voyelle1 + $voyelle2 + $voyelle3 + $voyelle4 + $voyelle5 + $voyelle6;

// Les Consonnes :
$consonne1 = substr_count($str, "b");
$consonne2 = substr_count($str, "c");
$consonne3 = substr_count($str, "d");
$consonne4 = substr_count($str, "f");
$consonne5 = substr_count($str, "g");
$consonne6 = substr_count($str, "h");
$consonne7 = substr_count($str, "j");
$consonne8 = substr_count($str, "k");
$consonne9 = substr_count($str, "l");
$consonne10 = substr_count($str, "m");
$consonne11 = substr_count($str, "n");
$consonne12 = substr_count($str, "p");
$consonne13 = substr_count($str, "q");
$consonne14 = substr_count($str, "r");
$consonne15 = substr_count($str, "s");
$consonne16 = substr_count($str, "t");
$consonne17 = substr_count($str, "v");
$consonne18 = substr_count($str, "w");
$consonne19 = substr_count($str, "x");
$consonne20 = substr_count($str, "z");
$consonnetableau = $consonne1 + $consonne2 + $consonne3 + $consonne4 + $consonne5 + $consonne6 + $consonne7 + $consonne8 + $consonne9 + $consonne10 + $consonne11 + $consonne12 + $consonne13 + $consonne14 + $consonne15 + $consonne16 + $consonne17 + $consonne18 + $consonne19 + $consonne20
?>

<table class="t1 t2">
    <tr>
        <th> Voyelles </th> 
        <th> Consonnes </th>
    </tr>
    <tr>
        <td><?php echo $voyelletableau ?></td>   
        <td><?php echo $consonnetableau ?></td>
    </tr>

<style>

th, td{
    border: 1px solid black;
    padding: 10px;
}

</style>