<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link rel="icon" type="image/png" href="assets/favicon/icons/favicon.ico"/>
    
    <link rel="stylesheet" href="assets/styles/accueil.css">
    <link rel="stylesheet" href="assets/styles/common/navbar.css">
    <link rel="stylesheet" href="assets/styles/common/footer.css">
    <link rel="stylesheet" href="assets/styles/apropos.css">
    <link rel="stylesheet" href="assets/styles/common/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

</head>
<body>

<!--NAVBAR-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3">
        <a href="accueil.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img class="logosite"src="assets/styles/images/logosite.png">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="accueil.php" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="location.php" class="nav-link">Location</a></li>
            <li class="nav-item"><a href="apropos.php" class="nav-link active" aria-current="page">À propos</a></li>
            <li class="nav-item">
                    <div>
                        <button href="login.php" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal">
                            Se déconnecter
                        </button>
                    </div>
                    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Déconnexion</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Voulez-vous vraiment vous déconnecter ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <form method="post">
                                    <a href="login.php"><button type="submit" class="btn btn-primary" name="deco">Valider</button></a>
                                </form>
                                <?php
                                if (isset($_POST["deco"])) {
                                    $_SESSION["name"] = "";
                                    $_SESSION["surname"] = "";
                                    $_SESSION["email"] = "";
                                    $_SESSION["password"] = "";
                                    $_SESSION["id"] = "";
                                    header("Location: login.php");
                                }
                                ?>
                            </div>
                          </div>
                        </div>
                      </div>
                </li>
        </ul>
    </header>
</div>

<!--BANNIERE-->
<div class="container-banner">
    <img class="banniere" src="assets/styles/images/ban01.jpg">
</div>




<!--QUI SOMMES NOUS-->
<section id="apropos" class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img class="retro" src="assets/styles/images/retro4.jpg" alt="a propos">
        </div>

        <div class="col-6 col-text">
            <div class="text-container">
                <div class="title d-flex align-items-center">
                    <h2>Qui sommes nous?</h2>
                </div>
                <div class="lorem">
                    <p class="hauteurligne">
                        <span style="color: blueviolet">L’histoire de Retro Gaming</span> commence en 2010, lorsque Laurent BEDANI lance son entreprise.
                        Initialement passionné par les jeux d’arcade et intéressé par la restauration de machines,
                        Laurent commence par acheter une borne d’arcade en panne pour son plaisir personnel. <br><br>
                        Il souhaite <span style="color: blueviolet">se challenger et tente de la réparer</span> grâce à Internet.
                        C’est de là que lui est venue l’idée de créer Retro Gaming, entreprise spécialisée dans la location
                        de bornes d’arcade
                        (matériel événementiel). <br><br>
                        Dans un premier temps, l’objectif de Retro Gaming est de <span style="color: blueviolet">louer des bornes d’arcade restaurées</span> afin
                        d’embellir
                        les évènements des entreprises.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="titre-principal container-fluid">
    <div class="row">
        <div class="title d-flex align-items-center">
            <img src="assets/styles/images/traitnoir.png">
        </div>
    </div>
</section>


<!--PROVENANCE-->

<div class="col-6 col-text">
    <div class="text-container title2">
        <h2>D'où  proviennent nos produits?</h2>
    </div>
</div>

<!--PHOTOS PROVENANCE-->
<div class="container">
    <div class="row mt-3">
        <div class="col-4 order-4 order-md-last">
            <img class="imgprovenance" src="assets/styles/images/market.png">
        </div>

        <div class="col-4 order-last order-md-first order-lg-2">
            <img class="imgprovenance" src="assets/styles/images/brocantegeeks.jpg">
        </div>

        <div class="col-4 order-first order-md-last">
            <img class="imgprovenance japan" src="assets/styles/images/japan.png">
        </div>
    </div>
</div>


<div class="container">
    <div class="row mt-3">
        <div class="col premiere order-4 order-md-last">
            <p class="hauteurligne">
                Les Marketplaces regorgent de consoles! <br>
                C'est pourquoi nous consultons régulièrement les réseaux sociaux afin de <span style="color: blueviolet">trouver des modèles</span> plus ou
                moins récents.
            </p>
        </div>
        <div class="col seconde order-last order-md-first order-lg-2">
            <p class="hauteurligne">
                <span style="color: blueviolet">Nous allons dans les marchés</span> et plus particulièrement les brocantes geeks afin de trouver un maximum de
                nouvelles consoles. <br>
                Une fois en magasin, nous testons les produits afin de vérifier leur bon fonctionnement et pouvoir vous
                les proposer.
            </p>
        </div>
        <div class="col troisieme order-first order-md-last">
            <p class="hauteurligne">
                Dans les années 90', <span style="color: blueviolet">la plupart des consoles sortaient avant tout au Japon</span> avant d'être distribuées au
                Etats-Unis et en Europe. <br>
                De plus de nombreux modèles inconnus du grand publics et reservés au marché japonais <span style="color: blueviolet">ne sont jamais
                sortis de l'hexagone.</span> <br>
                C'est pourquoi nous allons chercher ces modèles afin de vous les proposer à <span style="color: blueviolet">la location.</span>
            </p>
        </div>
    </div>
</div>




<section class="titre-principal container-fluid">
    <div class="row">
        <div class="title d-flex align-items-center">
            <img src="assets/styles/images/traitnoir.png">
        </div>
    </div>
</section>


<!--SUIVEZ NOUS-->
<div class="col-6 col-text">
    <div class="text-container title2">
        <h2>Suivez-nous sur nos différents réseaux sociaux!</h2>
    </div>
</div>


<div class="container-fluid text-center">
    <div class="row ">
        <div class="col-3 ">
            <img class="reseaux" src="assets/styles/images/facebook.png">
        </div>
        <div class="col-3 ">
            <img class="reseaux" src="assets/styles/images/twitter.png">
        </div>
        <div class="col-3 ">
            <img class="reseaux" src="assets/styles/images/instagram.jpg">
        </div>
        <div class="col-3 bubbleposition">
            <div class="bubble-text">
                <h1>Evénement!</h1>
                <hr>
                <p> Nous organisons des animations près de chez vous!<br/>
                    Inscrivez-vous à notre newsletter pour vous tenir au courant!
                </p>
            </div>
        </div>
    </div>
</div>
</div>






<!--PHONE NUMBER-->
<section class="container-fluid phone">
 <div class="row">
    <div class="title3 align-self-center col-6 d-flex">
        <p>
            <h5>Pour tous renseignements, n'hésitez pas à nous téléphoner!</h5>
        </p>

        <a class="phonenumber" href="tel:+33711223344">07 11 22 33 44
        </a>
    </div>

    <div class="col-6  emailBox">
        <input id="emailAddress" type="email" size="64" maxLength="64" required
               placeholder="Saisissez votre email" pattern=".+@beststartupever.com">
    </div>
 </div>
    
</section>



<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <h6>Rétro Gaming</h6>
          <p class="localisation">15 Avenue de la liberté<br>34000 MONTPELLIER</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Projets</h6>
          <ul class="footer-links">
            <li><a>Team buildings</a></li>
            <li><a>Animation d'évènements</a></li>
            <li><a>Jeux vidéo</a></li>
          </ul>
        </div>
        
        <div class="col-xs-6 col-md-3">
            <h6>Contactez-nous</h6>
            <ul class="footer-links">
              <li><a>Services clients</a></li>
              <li><a>Mentions légales</a></li>
              <li><a>FAQ</a></li>
            </ul>
          </div>
        

        <div class="col-xs-6 col-md-3">
            <h6>Liens</h6>
          <ul class="footer-links">
            <li><a>Nos partenaires</a></li>
            <li><a>Location événement</a></li>
            <li><a>Clients</a></li>
            <li><a>Service technique</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 
       <a>by 2021 Vincent - Lucas - Victor</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>



</body>
</html>