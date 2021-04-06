<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$ref = $_POST['ref'];
$cat = $_POST['cat'];
$libel = $_POST['libel'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];
$couleur = $_POST['couleur'];
$dateAjout = $_POST['dateAjout'];
// $dateModif = $_POST['dateModif'];

// Connexion à la base de données

require "../Models/connexion_bdd.php";

// Construction de la requête UPDATE sans injection SQL

//var_dump($join->fetchAll(PDO::FETCH_OBJ));
$rq = "UPDATE produits SET pro_ref=:pro_ref, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_ajout=:pro_d_ajout, pro_d_modif=:pro_d_modif  WHERE pro_id=:pro_id";
$requete = $db->prepare($rq);

$requete->bindValue(':pro_ref', $ref, PDO::PARAM_STR);
$requete->bindValue(':pro_libelle', $libel, PDO::PARAM_STR);
$requete->bindValue(':pro_description', $description, PDO::PARAM_STR);
$requete->bindValue(':pro_prix', $prix, PDO::PARAM_INT);
$requete->bindValue(':pro_stock', $stock, PDO::PARAM_INT);
$requete->bindValue(':pro_couleur', $couleur, PDO::PARAM_STR);
$requete->bindValue(':pro_d_ajout', $dateAjout, PDO::PARAM_STR);
$requete->bindValue(':pro_d_modif', $dateModif, PDO::PARAM_STR);

// Exécution de la requête
$requete->execute();
// Libération de la connexion au serveur de BDD

$requete->closeCursor();
//Construction de la requete pour chercher la valeur cat_nom
$join = $db->query('SELECT * FROM produits JOIN categories ON pro_cat_id=cat_id');

$rqcat = "UPDATE categories SET cat_nom=:cat_nom WHERE pro_id=:pro_id";

$requeteCat = $db->prepare($rqcat);

$requeteCat->bindValue(':cat_nom', $cat, PDO::PARAM_STR);
$requeteCat->bindValue(':pro_id',$_GET['pro_id'],PDO::PARAM_STR );

$requeteCat->execute();

$requeteCat->closeCursor();

echo 'Vos modifications ont bien été enregistré.'.'<br>';


// Redirection vers la page index.php 
// header("Location: list.php");
include('../Controlers/list.php');
exit;
?>


</body>
</html>