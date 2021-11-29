<?php

session_start();
$id = $_SESSION["id"];
$bdd= mysqli_connect("localhost","root","","moduleconnexion");
$req= mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE id = $id");
$res= mysqli_fetch_all($req,MYSQLI_ASSOC);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 


if (isset($_POST['env']))
{
    $nom1 = $_POST['nom'];
    $prenom1 = $_POST['prenom'];
    $password1 = $_POST['password'];
    $login1 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateurs SET login='$login1', prenom='$prenom1', nom='$nom1', password='$password1' WHERE  id = $id ");
    header("Location: profil.php");
} 

?>


<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <link rel="stylesheet" href="profil.css">
    <style type="text/css">
        A {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header class="img">
        <h1>Modification du profil</h1>
        <div class="pdp">
            <img src="https://meetanentrepreneur.lu/wp-content/uploads/2019/08/profil-linkedin.jpg">
        </div>
        <nav>
            <ul>
                <li id="index"> <a href="index.php">Accueil </a> </li>
                <?php 
            if (isset($_SESSION["id"])) {
            echo "<li><a href='deconnexion.php'>deconnexion</a></li>";
            echo "<li><a href='profil.php'>Profil</a></li>"; 
            } else {
            echo "<li><a href='connexion.php'>Se connecter</a></li>";
            echo "<li><a href='inscription.php'>Sinscrire</a></li>";
        };
            ?>

            </ul>
        </nav>

    </header>

    <main>
        <form name="formu" action="#" method="POST">
            <div class="form">
                <label for="username">Nouveau login:</label>
                <input id="login" name="login" type="text" placeholder="username" />
                <label for="username">Changement Prénom:</label>
                <input name="prenom" type="text" placeholder="prenom" />
                <label for="username">Changement nom:</label>
                <input name="nom" type="text" placeholder="nom" />
                <label for="username">Changement mot de passe :</label>
                <input name="password" type="password" placeholder="ton mdp" />
                <input type=submit value="Mettre à jour le profil" name="env" />
            </div>
        </form>
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