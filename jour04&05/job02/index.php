<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>methode get</title>
</head>

<body>
    <?php

    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    if (isset($_GET['nom'])) {        
        
    }
    if(isset($_GET['prenom'])){
        
    }


    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $nombre_arguments = count($_GET);

        echo "Le nombre d'arguments GET envoyé est : " . $nombre_arguments;
    }
    ?>

<form method="GET">
<table class="t1 t2">
    <tr>
        <th> Argument </th> 
        <th> Valeur </th>
    </tr>
    <tr>
        <td>prenom</td>   
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <td>nom</td>
        <td><?php echo $nom ?></td>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value='' required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value='' required>

            <button type="submit">Envoyer</button>
</form>
        
<style>

th, td{
    border: 1px solid black;
    padding: 10px;
}

</style>