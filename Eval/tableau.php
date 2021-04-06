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
                        <img src="images/jarditou_logo.jpg" alt="logo" class="img-fluid" title="logo">
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

            <img src="images/promotion.jpg" alt="promo" width="100%" height="auto">
        </header>
        <body>
        <!--Debut du tableau-->
        <section1>
            <!--Balise sémantiques organise et controle son code(section1)-->
            <Table class="table table-bordered">
                <thead>
                    <tr class="table-info">
                        <th scope="col">Photo</th>
                        <th scope="col">ID</th>
                        <th scope="col">Cat&eacute;gories</th>
                        <th scope="col">Libell&eacute;</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Couleur</th>
                    </tr>
                </thead>
        </section1>

        <section2>
            <!--Balise sémantiques organise et controle son code(section2)-->
            <tbody>
                <tr class="table-warning">
                    <!--couleur de classe-->
                    <td><img src="jarditou_photos/7.jpg" alt="photo barbecue" height="112" width="112" title="barbecue1"></td>
                    <td>7</td>
                    <td>Barbecues</td>
                    <td> Aramis</td>
                    <td>110.00€</td>
                    <td>Brun</td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td><img src="jarditou_photos/8.jpg" alt="photo barbecue" height="112" width="112" title="barbecue2"></td>
                    <td>8</td>
                    <td>Barbecues</td>
                    <td><?php echo $row->pro_libelle;?></td>
                    <td>249.99€</td>
                    <td>Noir</td>
                </tr>
            </tbody>

            <tbody>
                <tr class="table-warning">
                    <td><img src="jarditou_photos/11.jpg" alt="photo barbecue" height="112" width="112" title="barbecue3"></td>
                    <td>11</td>
                    <td>Barbecues</td>
                    <td> Clatronic</td>
                    <td>135.90€</td>
                    <td>chrome</td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td><img src="jarditou_photos/12.jpg" alt="photo barbecue" height="112" width="112" title="barbecue4"></td>
                    <td>12</td>
                    <td>Barbecues</td>
                    <td> Camping</td>
                    <td>88.00€</td>
                    <td>Noir</td>
                </tr>
            </tbody>

            <tbody>
                <tr class="table-warning">
                    <td><img src="jarditou_photos/13.jpg" alt="Brouette" height="112" width="112" title="Brouette"></td>
                    <td>7</td>
                    <td>brouette</td>
                    <td> Green</td>
                    <td>49.00€</td>
                    <td>Verte</td>
                </tr>
            </tbody>
            </Table>

        </section2>

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
        <br>
        <br>
    </div>

    <!--liens bootstrap-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>