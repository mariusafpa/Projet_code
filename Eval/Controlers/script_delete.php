
<?php 
//connexion à la bdd
require "../Models/connexion_bdd.php";

// Récupération de l'identifiant passé en GET



$pro_id=$_POST['id'];


// Construction de la requête DELETE sans injection SQL

$requete = $db->prepare("DELETE FROM produits WHERE pro_id=:pro_id");

$requete->bindValue(':pro_id', $pro_id, PDO::PARAM_INT);

$requete->execute();




// Libération de la connexion au serveur de BDD
$requete->closeCursor();


// echo 'Vos données ont bien été supprimé.';

// Redirection vers index.php
header("Location:../View/list.php");
exit;

?>