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
$boolean = false;
$entier = 1;
$varchar = "bonjour3";
$float = 3.2;
?>

<table>
    <tr>
        <th> Type </th> 
        <th> Nom </th>
        <th> Valeur </th>
    </tr>
    <tr>
        <td> boolean </td>   
        <td> $boolean</td>
        <td> <?php echo "false" ?> </td>
    </tr>
    <tr>
        <td> entier </td>
        <td> $entier </td>
        <td> <?php echo $entier ?> </td>
    </tr>
    <tr>
        <td> varchar</td>
        <td> $varchar</td>
        <td> <?php echo $varchar ?></td>
    </tr>
    <td> float</td>
    <td> $float</td>
    <td> <?php echo $float ?></td>

