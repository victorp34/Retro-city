<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/png" href="assets/favicon/icons/favicon.ico"/>

    <link rel="stylesheet" href="assets/styles/accueil.css">
    <link rel="stylesheet" href="assets/styles/common/navbar.css">
    <link rel="stylesheet" href="assets/styles/common/footer.css">
    <link rel="stylesheet" href="assets/styles/parallax.css">
    <link rel="stylesheet" href="assets/styles/common/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
     
</head>

<body>


    <!--NAVBAR-->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="accueil.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img class="logosite" src="assets/styles/images/logosite.png">
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="accueil.php" class="nav-link active" aria-current="page">Accueil</a></li>
                <li class="nav-item"><a href="location.php" class="nav-link">Location</a></li>
                <li class="nav-item"><a href="apropos.php" class="nav-link">À propos</a></li>
                <li class="nav-item">
                    <div>
                        <button href="index.php" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal">
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
                                    <a href="index.php"><button type="submit" class="btn btn-primary" name="deco">Valider</button></a>
                                </form>
                                <?php
                                if (isset($_POST["deco"])) {
                                    $_SESSION["name"] = "";
                                    $_SESSION["surname"] = "";
                                    $_SESSION["email"] = "";
                                    $_SESSION["password"] = "";
                                    $_SESSION["id"] = "";
                                    header("Location: index.php");
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

    <!--TITRE PRINCIPAL-->
    <div class="inside">
        <p>
        <h1>Découvrez nos meilleures offres!</h1>
        </p>
    </div>


    <div class="titre pt-5 bg-light text-center">
        <h1 class="display-4">Découvrez nos meilleures offres!</h1>
    </div>


    <!--PARALLAX-->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/d9c3f3307efc6c74f1256fae067ac.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Playstation 5 maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=121'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <span>dès</span>
                                    <span>20</span>
                                    <span>
                                        <span>€/Jour</span>
                                        <span class="text-uppercase">ttc</span>
                                    </span>
                                </div>
                            </div>
                            <div class="promo">
                                <div class="title">-10%</div>
                                <div class="expire">Expire dans 6 jours!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/xbox-series-x-2.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Xbox Series X maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=122'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <span>dès</span>
                                    <span>20</span>
                                    <span>
                                        <span>€/Jour</span>
                                        <span class="text-uppercase">ttc</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/1625583472-525-photo-nintendo-switch.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Switch maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=118'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <span>dès</span>
                                    <span>15</span>
                                    <span>
                                        <span>€/Jour</span>
                                        <span class="text-uppercase">ttc</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/Gear-Gameboy-Hack-DSC01030-696x463.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Gameboy Advance maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=82'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <span>dès</span>
                                    <span>10</span>
                                    <span>
                                        <span>€/Jour</span>
                                        <span class="text-uppercase">ttc</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/1200x680_top-10-n64-02_1.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Nintendo 64 maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=72'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <div class="prix text-muted">
                                        <span>dès</span>
                                        <span>15</span>
                                        <span>
                                            <span>€/Jour</span>
                                            <span class="text-uppercase">ttc</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail" style="height: 225px; width: 100%; display: block;"
                            src="assets/styles/images/gamecube.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Louez votre Gamecube maintenant!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href='reservation.php?id=80'" type="button" class="btn btn-sm btn-primary">Louez moi</button>
                                </div>
                                <div class="prix text-muted">
                                    <span>dès</span>
                                    <span>18</span>
                                    <span>
                                        <span>€/Jour</span>
                                        <span class="text-uppercase">ttc</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="promo">
                            <div class="title">-15%</div>
                            <div class="expire">Expire dans 3 jours!</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--SOUS TITRE-->
    <section>
        <div class="line-title">
            <h2>Pourquoi louer chez nous ?</h2>
            <hr size="7" class="ligne">
        </div>



        <div class="container-fluid">
            <div class='row'>
                <div class="col-6 col-photos">
                    <img src="assets/styles/images/gaming.jpg" alt="Nos activités">
                </div>

                <div class="col-6">

                    <h3 class="infos">Matériel inclus</h3>

                    <p class="lineheight">
                        Véritables accessoires de salon, les consoles next-gen envahissent votre quotidien de réalisme
                        et de
                        confort, toujours plus perfectionnés.
                        <span style="color: blueviolet">Vous organisez un événement avec un public de «gamers» ou de «geeks» ?</span> Louez nos consoles de
                        jeux
                        vidéo toutes équipées, et laissez-vous séduire par leur design moderne.<br>
                        Nous vous proposons un pack complet incluant dans votre location : un écran LCD, une console de
                        jeux
                        vidéo next gen et les jeux les plus en vogue de cette génération.
                        Brancher, puis jouer au jeu qui vous correspond le plus !<br>
                        <span style="color: blueviolet">Aucune configuration ou téléchargement supplémentaire n'est requis</span>, puisque les consoles sont
                        testées et mises à jour avant la location.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <br><br>


    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h3 class="infos">Jeux divers</h3>
                    <p class="lineheight">
                        Parce que la gamme des consoles nouvelle génération ne cesse de s’étendre, nous nous assurons de
                        toujours vous proposer les dernières machines à la mode.
                        <span style="color: blueviolet">Entre PlayStation 5, Wii-U, Nintendo Switch ou encore Xbox One, vous avez le choix.</span><br>
                        Tenter de gagner la course en jouant à Mario Kart avec un volant ou encore de devenir le
                        meilleur danseur avec Just Dance, vous plonge au coeur d’une partie des plus
                        exceptionnelles.<br>
                        Avec un jeu disponible jusqu’à 4 joueurs simultanés, partagez ce moment et amusez vous comme des
                        enfants !
                    </p>
                </div>



                <div class="col-6 col-photos">
                    <img src="assets/styles/images/jeuxconsoles.jpg" alt="Nos activités">
                </div>
            </div>
        </div>
    </section>


    <!--SEPARATION-->
    <div>
        <hr size="7" class="ligne">
    </div>


    <!--SHEMA-->
    <h2>Comment se déroule les étapes pour la location d'une console?</h2>

    <div>
        <img src="assets/styles/images/schemafinal.PNG" class="schema">
    </div>

    <!--FOOTER-->
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