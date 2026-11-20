<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIO</title>
    <link rel="stylesheet" href="css/style.css">
</head> (code php)
<body>
    <h1>Liste des auteurs</h1>
    <?php
    $connexion =new PDO ('mysql:host=localhost; dbname=bibliothèque; charset=utf8', 'root', 'Admin@99');
    $nom=$_POST["nom"];
    $Prenom=$_POST["prenom"];
    $Jour=$_POST["datedenaissance"];
    $Nationalite=$_POST["nationalité"];
    if (empty($nom) || empty($Prenom) ...) {
        echo ("Veuillez rempmir tous lesc champs !!")
    }
    $requete=$connexion->prepare("INSERT INTO auteur (nom,prenom,date_naissance,nationalité) VALUES(?,?,?,?)");
    $requete->execute([$nom,$Prenom,$Jour,$Nationalite]);
    $requete2="SELECT * FROM auteur";
    $resultat2=$connexion->query($requete2);
    ?>
    <table>;
        <tr>
            <th whidth='100px'>id_auteur</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date_naissance</th>
            <th>Nationalité</th>
            </tr>"
    <?php
    foreach ($resultat2 as $ligne){
        echo "<tr>";
        echo "<td>". $ligne['id_auteur']."</td>";
        echo "<td>". $ligne['nom']."</td>";
        echo "<td>". $ligne['prenom']."</td>";
        echo "<td>". $ligne['date_naissance']."</td>";
        echo "<td>". $ligne['nationalité']."</td>";
        echo "</tr>";
    }
    ?></table>
</body>
</html>