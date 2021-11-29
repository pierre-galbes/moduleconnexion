<?php

$connect= mysqli_connect("localhost","root","","moduleconnexion"); 

if (isset($_POST['env']))
{
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$login = $_POST['login'];
$conf = $_POST['conf']; 

if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
    echo '...Bienvenue dans le fan club de lOM';
    $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'Tas oublier de mettre le même mot de passe';}

} else {echo 'T as oublier de remplir un champ';}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>

<body>
    <header>
        <h1>INSCRIPTION</h1>
        <nav>
            <ul>
                <li id="index"> <a href="index.php">Accueil </a> </li>
                <li id="connexion"> <a href="connexion.php">Connexion </a> </li>
                <li id="pro"> <a href="profil.php">Profil </a> </li>
            </ul>
        </nav>
    </header>


    <main>
        <div class="form">
            <form action="#" method="post">
                <input name="login" type="text" placeholder="username" />
                <input name="prenom" type="text" placeholder="prenom" />
                <input name="nom" type="text" placeholder="nom" />
                <input name="password" type="password" placeholder="Ton mdp" />
                <input name="conf" type="password" placeholder="confirmer" />
                <input name="env" type="submit" placeholder="envoyer">
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