<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <meta charset="utf-8">

</head>

<body>
    <h1>My SQL</h1>
    <?php
            $bdd = mysqli_connect("localhost","root","","moduleconnexion"); 
            $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  
            $res= mysqli_fetch_all($req); 
?>

    <h1>Tableau de bord</h1>
    <nav>
        <ul>
            <li id="index"> <a href="index.php">Accueil </a> </li>
            <li id="inscription"> <a href="inscription.php">Inscription </a> </li>
            <li id="connexion"> <a href="connexion.php">Connexion </a> </li>
            <li id="pro"> <a href="profil.php">Profil </a> </li>
        </ul>
    </nav>
    <table>

        <head>
            <?php
                echo '<tr>';                        
                foreach($res[0] as $key => $value){        
                echo "<th>$key</th>"; }
                    echo '</tr>';
                    ?>
        </head>

        <body>
            <tr>
                <?php



                foreach($res as $key => $value){ 
                echo '<tr>';
                foreach ($value as $key1 => $value1) 
                {
                echo "<td>$value1</td>";  
                }
                echo '</tr>'; 
                }
                ?>

        </body>
    </table>
</body>

</html>