
<!DOCTYPE html>
<html lang="fr">

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
            <img src="../images/promotion.jpg" alt="promo" width="100%" height="auto">
        </header>


        <body>
            <!--Balise sémantiques organise et controle son code(section)-->
            <br>
            <p>* Ces zones sont obligatoires</p><br>
            <h1>Vos coordonn&eacute;es</h1>

            <!--debut du formulaire-->

            <form class="container-fluid" method="post" action="../Controlers/verif_contact.php">

                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Nom* :</label>
                    <input type="text" class="form-control shadow-lg" id="firstname" name="firstname" placeholder="Veuillez saisir votre nom" value="<?= isset($firstname) ? htmlspecialchars($firstname) : "";?>">
                    <span style="color:red">
                    <?php if(isset($firstname_error)) echo $firstname_error;?>
                    </span>
                </div>

                <div class="col-md-12">
                    <label for="validationDefault02" class="form-label">Pr&eacute;nom* :</label>
                    <input type="text" class="form-control shadow-lg" id="name" name="name" placeholder="Veuillez saisir votre pr&eacute;nom" value="<?= isset($name) ? htmlspecialchars($name) : "";?>" >
                    <span style="color: red;">
                    <?php if(isset($name_error)) echo $name_error;?>
                    </span>
                </div>

                <br>

                <div class="col-md-12">
                    <p class="text-sm-start">Sexe* :</p>
                    <div class="form-check form-check-inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexeverif[]" id="radiuo1" value="femme">
                            <label class="form-check-label" for="inlineRadio1">F&eacute;minin</label>
                            
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexeverif[]" id="radio2" value="homme">
                            <label class="form-check-label" for="inlineRadio2">Masculin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" checked name="sexeverif[]" id="radio3" value="neutre">
                            <label class="form-check-label" for="inlineRadio3">Neutre</label>
                        </div>
                    </div>
                    <br>
                    <span style="color: red;">
                            <?php if(isset($sexe_error)) echo $sexe_error;?>
                        </span>
                </div>

                <br>
                <br>

                <div class="col-md-12">
                    <label for="user_birth_date"  class="my-2">Date de naissance* :</label>
                    <input type="date" class="form-control shadow-lg" name="user_birth" id="user_birth_date" value="<?= isset($birth_date) ? htmlspecialchars($birth_date) : "";?>">
                    <span style="color: red;">
                            <?php if(isset($birth_date_error)) echo $birth_date_error;?>
                        </span>
                </div>

                <br>


                <!--Formulaire partie 2-->
                <div class="col-md-12">
                    <label for="validationDefault03" class="form-label">Code postal* :</label>
                    <input type="text" class="form-control shadow-lg" id="postaldud" name="postal" placeholder="ex : 80090" value="<?= isset($postal) ? htmlspecialchars($postal) : "";?>">
                    <p id="errorPostal"></p>
                    <span style="color: red;">
                            <?php if(isset($postal_error)) echo $postal_error;?>
                        </span>
                </div>

                <div class="col-md-12">
                    <label for="validationDefault04" class="form-label">Adresse :</label>
                    <input type="text" class="form-control shadow-lg" id="street" placeholder="ex : rue Marcel Pagnol">
                </div>

                <div class="col-md-12">
                    <label for="validationDefault05" class="form-label">Ville :</label>
                    <input type="text" class="form-control shadow-lg" id="city" placeholder="ex : Amiens">
                </div>

                <div class="col-md-12">
                    <label for="validationDefault06" class="form-label">Email* :</label>
                    <input type="text" class="form-control shadow-lg" id="mail" name="email" placeholder="Jeanmelanchonus@gmail.org" value="<?= isset($email) ? htmlspecialchars($email) : "";?>">
                    <p id="errormail"></p>
                    <span style="color: red;">
                            <?php if(isset($email_error)) echo $email_error;?>
                        </span>
                </div>

                <br>

                <br>

                <!--formulaire 3éme partie)-->

                <div class="col-md-12">
                    <h1>Votre demande</h1>
                    <label for="inputState" class="form-label">Sujet*</label>
                    <select id="inputState" class="form-select" name="choice">
                            <option value="0">veuillez s&eacute;l&eacute;ctionner un sujet</option>
                            <option value="Mes commandes">Mes commandes</option>
                            <option value="Question sur un produit">Question sur un produit</option>
                            <option value="R&eacute;clamation">R&eacute;clamation</option>
                            <option value="Autres">Autres</option>
                        </select>
                        <br>
                        <span style="color: red;">
                            <?php if(isset($choice_error)) echo $choice_error;?>
                        </span>
                </div>

                <br>

                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre question*</label>
                    <textarea class="form-control shadow-lg" id="exampleFormControlTextarea1" name="textarea" rows="3"></textarea>
                    <br>
                    <span style="color: red;">
                    <?php if(isset($textArea_error)) echo $textArea_error;?>
                    </span>
                </div>
                

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="invalidCheck2" name="put">
                        <label class="form-check-label" for="invalidCheck2">J'accepte le traitement informatique de ce formulaire</label>
                        <br>
                        <span style="color: red;">
                    <?php if(isset($put_error)) echo $put_error;?>
                    </span>
                    </div>
                </div>
                </section>
                
                <div class="text-center" >
                    <button class="btn btn-secondary shadow-lg" type="submit" id="submit">Envoyer</button>
                    <a href="../View/contact.php"><button class="btn btn-secondary shadow-lg" type="button" id="reset">Annuler</button></a>
                </div>
                </form>
            
        

        <br>

        <footer>
            <!--Balise sémantiques organise et controle son code(footer et nav)-->
            <!--Barre de navigation bottom-->
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:darkslategray">
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