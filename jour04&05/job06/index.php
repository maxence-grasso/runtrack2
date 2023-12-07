<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>methode get</title>
</head>

<body>

    <form action="" method = "GET">
        <label for="nombre">nombre :</label> <input type="nombre" id="nombre" name="nombre"><br /><br />
        <button type ="submit">Submit</button>
    </form>

    <?php

    $a = $_GET['nombre'];
    if ($a % 2 === 0) {
       echo $a, ' est pair';
    } else {
       echo $a, ' est impair';
    }

    ?>
        </form>
    </body>


<style>

form {
    margin: auto;
}

</style>