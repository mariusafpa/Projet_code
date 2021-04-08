
<?php
$id = $_POST['id'];
$ref = $_POST['ref'];
$libel = $_POST['libel'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];
$couleur = $_POST['couleur'];
$dateModif = $_POST['dateModif'];
$pro_bloque = $_POST['pro_bloque'];
$pro_cat_id = $_POST['pro_cat_id'];




//ligne verif var
//var_dump($ref,$libel,$description,$prix,$stock,$couleur,$dateAjout,$pro_bloque,$dateAjout,$pro_cat_id);

// Connexion à la base de données

require "../Models/connexion_bdd.php";

// Construction de la requête UPDATE sans injection SQL

$rq = "UPDATE produits 
SET pro_ref=:pro_ref, 
pro_libelle=:pro_libelle, 
pro_description=:pro_description, 
pro_prix=:pro_prix, 
pro_stock=:pro_stock, 
pro_couleur=:pro_couleur, 
pro_bloque=:pro_bloque,
pro_d_modif=:pro_d_modif,
pro_photo=:pro_photo
WHERE pro_id=:pro_id";

$requete = $db->prepare($rq);
$requete->bindValue(':pro_id',$id);
$requete->bindValue(':pro_ref', $ref);
$requete->bindValue(':pro_libelle', $libel);
$requete->bindValue(':pro_description', $description);
$requete->bindValue(':pro_prix', $prix);
$requete->bindValue(':pro_stock', $stock);
$requete->bindValue(':pro_couleur', $couleur);
$requete->bindValue(':pro_bloque',$pro_bloque);
$requete->bindValue(':pro_d_modif',$dateModif);
$requete->bindValue(':pro_photo',$fileExt);

// Exécution de la requête
$requete->execute();
// Libération de la connexion au serveur de BDD

$requete->closeCursor();



header("Location: ../View/list.php");
//include('../Controlers/list.php');
exit;
?>


