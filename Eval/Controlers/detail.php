<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
<!--Permet d'indiquer comment le navigateur doit afficher la page sur les différents supports-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--référencement naturel de ma page, elle doit etre clair et précise-->
<meta name="Accueil" content="Accueil jarditou">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>Tableau</title>
</head>
<!--seul container de la page (fluid)-->
<div class="container-fluid">
    <header>
        <!--Balise sémantiques organise et controle son code(header)-->

        <div class="d-none d-md-block">
            <div class="row justify-content-between">
                <div class="col-sm-0 col-md-4">
                    <img src="../images/jarditou_logo.jpg" alt="logo" class="img-fluid" title="logo">
                </div>

                <div class="col-sm-0 col-md-4">
                    <h1 class="align-text-bottom" style="color:darkgreen">Tout le jardin</h1>
                </div>
            </div>
        </div>
        <!--Barre navigation et recherche-->

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:lightskyblue">
            <a class="navbar-brand" href="index.php">Jarditou.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tableau.php">Tableau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">rechercher</button>
                </form>
            </div>
        </nav>

        <img src="../images/promotion.jpg" alt="promo" width="100%" height="auto">
    </header>
</head>

<body>

<?php
require "../Models/connexion_bdd.php";
?>



<?php

try {
    // Récupération de l'identifiant concerné, passé en GET
    $pro_id = $_GET['pro_id'];


    $requete = "SELECT * FROM produits WHERE pro_id=". $pro_id;

    
    
    $result = $db->query($requete);
    
    // Récupération du résultat de la requête

    $row = $result->fetch(PDO::FETCH_OBJ);
    
    // Libération de la connexion au serveur de BDD
    $result->closeCursor();
}
catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}
?>


<br>
<form class="row g-3" action="script_modif_jarditou.php" method="post">

                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">R&eacute;f&eacute;rence :</label>
                    <input type="text" class="form-control" id="validationDefault01" name="ref" value="<?php echo $row->pro_ref?>" readonly>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault02" class="form-label">Cat&eacute;gorie :</label>
                    <input type="text" class="form-control" id="validationDefault02" name="cat"value="<?php echo $row->cat_nom?>"  readonly>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault03" class="form-label">Libell&eacute :</label>
                    <input type="text" class="form-control" id="validationDefault03" name="libel"value="<?php echo $row->pro_libelle?>"  readonly>
                </div>
                <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                <input type="text" class="form-control" id="validationDefault03" name="description"value="<?php echo $row->pro_description?>"  readonly>
            </div>
                <div class="col-md-12">
                    <label for="validationDefault05" class="form-label">Prix :</label>
                    <input type="text" class="form-control" id="validationDefault05" name="prix" value="<?php echo $row->pro_prix?> €"  readonly>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault06" class="form-label">Stock :</label>
                    <input type="text" class="form-control" id="validationDefault06" name="stock" value="<?php echo $row->pro_stock?>"  readonly>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault07" class="form-label">Couleur :</label>
                    <input type="text" class="form-control" id="validationDefault07" name="couleur" value="<?php echo $row->pro_couleur?>"  readonly>
                </div>
                <br>
                <div class="col-md-12">
                <br>
                    <p class="text-sm-start">Produit bloqué ? :</p>
                    <div class="form-check form-check-inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" disabled>
                            <label class="form-check-label" for="inlineRadio1">Oui</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2" disabled>
                            <label class="form-check-label" for="inlineRadio2">Non</label>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                <br>
                    <label for="validationDefault07" class="form-label">Date d'ajout :</label>
                    <input type="text" class="form-control" id="validationDefault08" name="dateAjout" value="<?php echo $row->pro_d_ajout?>"  readonly>
                </div>
                <div class="col-md-12">
                <br>
                    <label for="validationDefault07" class="form-label">Date de modification :</label>
                    <input type="text" class="form-control" id="validationDefault09" name="dateModif" value="<?php if(empty($row->pro_d_modif)){
                        echo "le produit n'a pas encore été modifié";
                    }else echo $row->pro_d_ajout
                    ?>"  readonly>
                    <a href="formulaire_jarditou.php?pro_id=<?php echo $row->pro_id ?>">Modifier</a>
        </form>



<a href="../Controlers/list.php"><button type="button">Retour</button></a>



<footer>
            <!--Balise sémantiques organise et controle son code(footer)-->
            <!--Barre de navigation bottom-->
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:darkslategray ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: white;">Mention l&eacute;gale<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Horraires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Plan du site</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </footer>
        <br>
        <br>
    </div>

    <!--liens bootstrap-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>