<?php

// Récupération des informations passées en POST, nécessaires à la modification

$ref = $_POST['ref'];
$libel = $_POST['libel'];
$description = $_POST['description'];
$prix = floatval($_POST['prix']);
$stock = $_POST['stock'];
$couleur = $_POST['couleur'];
$dateAjout = $_POST['dateAjout'];
$pro_bloque = $_POST['pro_bloque'][0];
$pro_cat_id = $_POST['pro_cat_id'];

// var_dump($_POST['pro_bloque'][0]);
// die;



// Connexion à la base de données

require "../Models/connexion_bdd.php";

try {
// Construction de la requête INSERT sans injection SQL

$requete = $db->prepare("INSERT INTO produits (pro_ref,pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_d_ajout,pro_bloque,pro_cat_id)
VALUES (:ref,:libel,:de,:prix,:stock,:couleur,:dateAjout,:pro_bloque,:pro_cat_id)");

$requete->bindValue(':ref', $ref, PDO::PARAM_STR);
$requete->bindValue(':libel', $libel, PDO::PARAM_STR);
$requete->bindValue(':de', $description, PDO::PARAM_STR);
$requete->bindValue(':prix',$prix);
$requete->bindValue(':stock',$stock, PDO::PARAM_STR);
$requete->bindValue(':couleur',$couleur, PDO::PARAM_STR);
$requete->bindValue(':dateAjout',$dateAjout, PDO::PARAM_STR);
$requete->bindValue(':pro_bloque',$pro_bloque, PDO::PARAM_STR);
$requete->bindValue(':pro_cat_id',$pro_cat_id, PDO::PARAM_INT);



$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();

echo 'Vos données ont bien été enregistrées !';
}


// Gestion des erreurs
catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}

// Redirection vers la page index.php
header("Location:../View/list.php");
//include('index.php');
exit;
?>