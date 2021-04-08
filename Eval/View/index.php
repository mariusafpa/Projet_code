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

    <title>Page Accueil</title>
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

            <img src="../images/promotion.jpg" alt="promo" width="100%" height="auto" title="promo_jarditou">
        </header>

        <br>

        <!--Section paragrapghe au dessus de md=4colonnes à partir de sm=12 colonnes-->

        <article1>
            <!--Balise sémantiques organise et controle son code(article1)-->
            <div class="row">
                <div class="col-md-8">
                    <div class="shadow p-3 mb-5 bg-body rounded">

                        <!--début article et paragraphe-->

                        <h1>L'entreprise</h1>

                        <p>Notre entreprise familiale met tout son savoir-faire &agrave; votre disposition dans le domaine du jardin et du paysagisme.</p>

                        <p>Cr&eacute;&eacute;e il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motoris&eacute;s.</p>

                        <p> Implant&eacute;s à Amiens, nous intervenons dans tout le d&eacute;partement de la Somme : Albert, Doullens, P&eacute;ronne, Abbeville, Corbie</p>
        </article1>

        <article2>
            <!--Balise sémantiques organise et controle son code(article2)-->
            <h1>Qualité</h1>

            <p>Nous mettons à votre disposition un service personnalis&eacute;, avec 1 seul interlocuteur durant tout votre projet.</p>

            <p>Vous serez s&eacute;duit par notre expertise, nos compétences et notre s&eacute;rieux.</p>
        </article2>

        <article3>
            <!--Balise sémantiques organise et controle son code(article3)-->

            <h1>Devis gratuit</h1>

            <p>Vous pouvez bien s&ucirc;r contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le r&eacute;alisons gratuitement.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
                risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim
                est eleifend mi, non fermentum diam nisl sit amet erat.</p>
            </div>
            </div>
        </article3>

        <!--colonne de droite dans section paragraphe au dessus de md=4colonnes à partir de sm=12colonnes-->

        <div class="col-md-4 col-sm-12" style="background-color: gold;">
            <figure class="text-center">
                <h2>[Colonne de droite]</h2>
            </figure>
        </div>
        </div>

        <br>

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
    </div>

    <br>
    <br>

    <!--liens bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>