<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <!--Permet d'indiquer comment le navigateur doit afficher la page sur les différents supports-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--référencement naturel de ma page, elle doit etre clair et précise-->

    <meta name="Accueil" content="Accueil jarditou">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tableau</title>
</head>

<body>
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
                <a class="navbar-brand" href="../View/index.php">Jarditou.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../View/index.php">Accueil<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../View/list.php">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../View/contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">rechercher</button>
                    </form>
                </div>
            </nav>

            <img src="../images/promotion.jpg" alt="promo" width="100%" height="auto">
        </header>

        <body>

            <?php
            
            //$pro_id=$_GET['pro_id'];
            $pro_id=isset($form_pro_id)?$form_pro_id:$_GET['pro_id'];
            
            require "../Models/connexion_bdd.php";
            require "../Controlers/Controler.php";

            use Controler\Controler;


            $requete = "SELECT * FROM produits JOIN categories ON pro_cat_id=cat_id WHERE pro_id=".$pro_id;
            $result = $db->query($requete);


            $result->execute();
            $result->setFetchMode(PDO::FETCH_CLASS,'Controler\Controler');
            $row = $result->fetch();
            $result->closeCursor();

            $requetecat = "SELECT cat_nom,cat_id FROM categories";
            $resultcat = $db->query($requetecat);
            $rowcat = $resultcat->fetchAll(PDO::FETCH_ASSOC);

            // var_dump($row);


            ?>
            <div class="text-center my-5">
                <img src="<?php echo $row->getImg()?>" width="400px">
            </div>

            <form class="row g-3" action="verif_modif.php" method="post" enctype="multipart/form-data">

                <div class="container-fluid">
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">ID :</label>
                        <input type="text" class="form-control" id="validationDefault03" readonly name="id"
                            value="<?php echo $row->pro_id?>">
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault01" class="form-label">R&eacute;f&eacute;rence :</label>
                        <input type="text" class="form-control" id="validationDefault01" name="ref"
                            value="<?php echo $row->pro_ref?>">
                        <span style="color:red"><?php if(isset($ref_error)) echo $ref_error;?></span>


                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Cat&eacute;gories</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="pro_cat_id">
                            <?php foreach($rowcat as $k=>$select){
            echo  '<option value="'.$select['cat_id'].'">'.$select['cat_nom'].'</option>';
            }?>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">Libell&eacute :</label>
                        <input type="text" class="form-control" id="validationDefault03" name="libel"
                            value="<?php echo $row->pro_libelle?>">
                        <span style="color:red"><?php if(isset($pro_libel_error)) echo $pro_libel_error;?></span>
                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="3"><?php echo $row->pro_description?></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Prix :</label>
                        <input type="number" step="0.01" class="form-control" id="validationDefault05" name="prix"
                            value="<?php echo floatval($row->pro_prix)?>">
                        <span style="color:red"><?php if(isset($prix_error)) echo $prix_error;?></span>
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault06" class="form-label">Stock :</label>
                        <input type="text" class="form-control" id="validationDefault06" name="stock"
                            value="<?php echo $row->pro_stock?>">
                        <span style="color:red"><?php if(isset($stock_error)) echo $stock_error;?></span>
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault07" class="form-label">Couleur :</label>
                        <input type="text" class="form-control" id="validationDefault07" name="couleur"
                            value="<?php echo $row->pro_couleur?>">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <br>
                        <p class="text-sm-start">Produit bloqué ? :</p>
                        <div class="form-check form-check-inline">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadio1"
                                    value="1">
                                <label class="form-check-label" for="inlineRadio1">Oui</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadio2"
                                    value="0" checked>
                                <label class="form-check-label" for="inlineRadio2">Non</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <br>
                        <label for="validationDefault07" class="form-label">Date d'ajout :</label>
                        <input type="text" class="form-control" id="validationDefault08" name="dateAjout"
                            value="<?php echo $row->pro_d_ajout?>">
                    </div>

                    <div class="col-md-12">
                        <br>
                        <label for="validationDefault07" class="form-label">Date de modification :</label>
                        <input type="text" class="form-control" id="validationDefault09" name="dateModif"
                            value="<?php echo date("Y-m-d H:i:s")?>">
                        <br>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileUpload" name="photo">
                        <label class="custom-file-label" for="fileUpload">Fichier :</label>
                        <div class="text-center">
                            <p><br><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .gif, .png sont autorisés avec
                                une taille maximale de 5 Mo.</p>
                            <span style="color:red">
                                <?php if(isset($photo_error)) echo $photo_error;?>
                            </span>
                        </div>
                    </div>


                    <div class="text-center">
                        </span>
                        <br>
                        <button type="submit" name="submit" class="btn btn-success">Valider les modifications</button>
                        <a href="../View/list.php"><button type="button" class="btn btn-info">retour</button></a>
                    </div>
                </div>
            </form>
            <br>
        </body>

        <footer>
            <!--Balise sémantiques organise et controle son code(footer)-->
            <!--Barre de navigation bottom-->
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:darkslategray ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: white;">Mention l&eacute;gale<span
                                    class="sr-only"></span></a>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>