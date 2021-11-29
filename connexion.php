<?php
$bdd= mysqli_connect("localhost","root","","moduleconnexion");


if(isset($_POST['login']) && isset($_POST['mdp'])){
    $login=$_POST['login'];
    $pass=$_POST['mdp'];
    $sql=mysqli_query ($bdd,"SELECT * FROM utilisateurs WHERE login='$login' and password='$pass'");
    $res= mysqli_fetch_all($sql); 
    if(count($res) > 0 ) {
        echo "vous êtes connecté";
        session_start();
        $_SESSION['id']=$res[0][0];
        header("Refresh: 6;url=profil.php");
        if ($login == 'admin' && $pass== 'admin') {
            $sql=mysqli_query ($bdd,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$pass'");
            $res= mysqli_fetch_all($sql); 
            session_start();
            header ('Location: admin.php');
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>

    <header>
        <h1>CONNEXION</h1>
        <nav>
            <ul>
                <li id="index"> <a href="index.php">Accueil </a> </li>
                <li id="inscription"> <a href="inscription.php">Inscription </a> </li>
                <li id="pro"> <a href="profil.php">Profil </a> </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form">
            <form method="POST" action="#">
                <div class="connexion">
                    <label>Login:</label><input type=text name="login"><br>
                    <label>Password:</label><input type=password name="mdp"><br>
                    <input type=submit value="Envoyer" name="env">
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div>
            <h3>contact</h3>
            <p>club.ijklmnop@laplateforme.gros<br>Tel:06-52-96-96-65 </p>
        </div>

        <div>
            <h3>Emplacements</h3>
            <p>Marseille, 69 boulvard de la roue arriere </p>
        </div>

        <div class="réso">
            <h3>Nos réseaux </h3>
            <div class="icone">
                <a target="_blank" href="https://twitter.com/"><img id="icone"
                        src="https://cdn-icons-png.flaticon.com/128/733/733579.png" /></a>
                <a target="_blank" href="https://www.facebook.com/"><img id="icone"
                        src="https://cdn-icons-png.flaticon.com/128/187/187189.png" /></a>
            </div>
        </div>
    </footer>


</body>

</html>