<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo PHP</title>
    <head>
    <meta charset="utf-8">

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
<table class="table table-bordered border-dark mt-3 table-responsive ">
    <thead>
        <tr>
        <th scope="col" class="table-secondary text-center">Photos</th>
        <th scope="col" class="table-secondary text-center">ID</th>
        <th scope="col" class="table-secondary text-center">Référence</th>
        <th scope="col" class="table-secondary text-center">Libellé</th>
        <th scope="col" class="table-secondary text-center">Prix</th>
        <th scope="col" class="table-secondary text-center">Stock</th>
        <th scope="col" class="table-secondary text-center">Couleur</th>
        <th scope="col" class="table-secondary text-center">Ajout</th>
        <th scope="col" class="table-secondary text-center">Modif</th>
        <th scope="col" class="table-secondary text-center">Bloqué</th>
        </tr>
    </thead>

<!-- Notre code php -->
<?php

    require "../Models/connexion_bdd.php"; // Connexion base
    $requete = "SELECT * FROM produits";
    $result = $db->query($requete);
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { ?>
        <tr>
        <td class="table-warning text-center"><img src="<?php echo'../jarditou_photos/'.$row->pro_id.'.'.$row->pro_photo?>"  width="150px"></td></td>
        <td class="table-secondary text-center"><?= $row->pro_id; ?></td>
            <td class="table-secondary text-center"><?= $row->pro_ref; ?></td>
            <td class="table-warning text-center">
                <a href="detail.php?pro_id=<?php echo $row->pro_id; ?>" class="link-danger fw-bold">
                    <?= $row->pro_libelle; ?>
                </a>
            </td>
            <td class="table-secondary text-center"><?= $row->pro_prix . ' €'; ?></td>
            <td class="table-secondary text-center"><?= $row->pro_stock; ?></td>
            <td class="table-secondary text-center"><?= $row->pro_couleur; ?></td>
            <td class="table-secondary text-center"><?= $row->pro_d_ajout; ?></td>
            <td class="table-secondary text-center"><?= $row->pro_d_modif; ?></td>
            <td class="table-secondary text-center"></td>
        </tr>

            
        <?php 
        }

$result->closeCursor(); // Libère la connexion au serveur


}  
?>
<div> 
<a href="formulaire_jarditou.php?pro_id=<?php echo $row->pro_id ?>">Modifier</a>  

                <!-- <?php  echo $row->pro_libelle; ?> <?php echo $row->pro_prix;?> On affiche le nom des produits -->
                
                <!-- <a href="formulaire_jarditou.php?cat_id=<?php echo $row->cat_id ?>"></a> -->
            </div> 
<a href="../index.php"><button>Retour Index</button></a>
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
