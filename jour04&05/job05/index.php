<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>methode post</title>
</head>

<body>

    <form action="" method = "post">
        <label for="username">Username</label> <input type="username" id="usename" name="username"><br /><br />
        <label for="password">Password:</label> <input type="text" id="password" name="password"><br /><br />
        <button type ="submit">Login</button>
    </form>

        <?php
        $usr = "John";
        $psw = "Rambo";
        $username = '$_POST[username]';
        $password = '$_POST[password]';

    
        session_start();
        if ($_SESSION['login']==true || ($_POST['username']=="John" && $_POST['password']=="Rambo")) {
            echo "C'est pas ma guerre";
           
        }else {
            echo "Votre pire cauchemar";
        }
        ?>
        </form>
    </body>


<style>

form {
    margin: auto;
}

</style>