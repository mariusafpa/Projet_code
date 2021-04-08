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
                    <img src="/images/jarditou_logo.jpg" alt="logo" class="img-fluid" title="logo">
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
                        <a class="nav-link" href="list.php">Tableau</a>
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

        <img src="/images/promotion.jpg" alt="promo" width="100%" height="auto">
    </header>
</head>

<body>

<?php 
//connexion à la bdd
require "../Models/connexion_bdd.php";
require "../Controlers/Controler.php";

use Controler\Controler;



$pro_id=$_GET['pro_id'];
$sql = 'SELECT * FROM produits WHERE pro_id='.$pro_id;
$ref = $db->query($sql);

$ref->setFetchMode(PDO::FETCH_CLASS,'Controler\Controler');
$row = $ref->fetch();

$ref->execute();
$ref->closeCursor();
?>


<div class="text-center mt-5 mb-5">
<img src="<?php echo $row->getImg()?>"  width="600px">
</div>

<h1 class="text-center">Êtes vous sûr de vouloir supprimer "<?php echo $row->pro_ref;?>" de la base de données ?</h1>

<form method="post" action="../Controlers/script_delete.php" class="text-center">
    <input type="text" hidden class="form-control" name="id" value="<?php echo $row->pro_id?>" >
    <button type="submit" class="btn btn-danger" >Supprimer</button>
    <a href="list.php"><button type="button" class="btn btn-info" name="retour">Annuler</button></a>
</form>



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