<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tocco d'Italia, Restaurant italien à Mons</title>

  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a class="closebtn">×</a>
            <a href="#about">Le restaurant</a>
            <a href="#event">Notre menu de la semaine</a>
            <a href="#menu-list">La carte</a>
            <a href="#contact">Nous contacter</a>
          </div>
          <span class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Tocco d'Italia</h1>
            <p>Votre cuisine traditionnelle italienne à Mons</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Le restaurant</h1>
          <p class="header-p">Une cuisine d’inspiration en gardant racines et authenticité italiennes.</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Qui sommes-nous ?</h2>
              <p>Installé au cœur de la cité du doudou depuis le 1er décembre 2011, le restaurant <span class="yellow">Tocco d’Italia</span> a pris ses marques à l’ancienne blanchisserie Boland, situé faceau Delhaize à la rue de Nimy.</p>
              <p>Le patron aux cuisines en gardant ce lien avec la clientèle pour une symbiose culinaire. Cuisine du marché, fraicheurs des aliments, toujours quelques suggestions hors carte en sortant des sentiers battus pour en satisfaire au mieux les inconditionnels.</p>
              <p>Organisation de banquet, séminaire, réunion de travail pour une capacité de 45 personnes assises.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="res01.jpeg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <section id="event">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding: 60px;">
            <h1 class="header-h">Notre menu de la semaine</h1>
          </div>
          <div class="col-md-12" style="padding-bottom: 60px;">
            <div class="item active left">
              <div class="col-md-12 details-text">
                <div class="content-holder text-center">

                  <p>Apéritif maison</p>
                  <span class="yellow">***</span>
                  <p>Antipasti</p>
                  <span class="yellow">***</span>
                  <p>Orecchiette alla salsiccia
                    <br> Ou
                    <br> Préparation de pasta d'Amatrice</p>
                  <span class="yellow">***</span>
                  <p>Sorbet</p>
                  <span class="yellow">***</span>
                  <p>Boeuf façon "Parmiggiana"
                    <br> Ou
                    <br> Poisson </p>
                  <span class="yellow">***</span>
                  <p>Dolce</p>
                  <p></p>
                  <h2 class="text-center">Prix : 49 €</h2>
                  <p><small>Réservation INDISPENSABLE</small></p>
                  <p style="font-size: 10px;">Le weekend nous travaillons exclusivement avec ce menu ou plats de celui-ci</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">La carte</h1>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".aperitifs">Apéritifs</a></li>
            <li><a class="filter" data-filter=".antipasti">Antipasti</a></li>
            <li><a class="filter" data-filter=".primi">Primi</a></li>
            <li><a class="filter" data-filter=".secondi">Secondi</a></li>
            <li><a class="filter" data-filter=".dolce">Dolce</a></li>
            <li><a class="filter" data-filter=".digestivo">Digestivo</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">
          <!-- APERITIFS -->
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">San bitter</a>
              <span class="menu-line"></span>
            <span class="menu-price">3.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Prosecco</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Rosso antico</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Martini</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">Rouge ou blanc</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Campari</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">Soda, Orange</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Apéritifs maison</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>

          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Negroni</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">Gin, Campari, Martini</span>
          </div>

          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Bellini</a>
              <span class="menu-line"></span>
            <span class="menu-price">8.00 €</span>
            </span>
            <span class="menu-subtitle">Sirop de pêche, Prosecco</span>
          </div>
          <div class="aperitifs menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Spritz</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">Campari ou Apérol</span>
          </div>
          <!-- /APERITIFS -->

          <!-- ANTIPASTI -->
          <div class="antipasti menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Grand jambon d'Italie</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="antipasti menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Mozzarella caprese</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="antipasti menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Vitelo tonnato</a>
              <span class="menu-line"></span>
            <span class="menu-price">18.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="antipasti menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Carpaccio classico</a>
              <span class="menu-line"></span>
            <span class="menu-price">18.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="antipasti menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Antipasti rustico</a>
              <span class="menu-line"></span>
            <span class="menu-price">18.00 € PP</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <!-- /ANTIPASTI -->

          <!-- PRIMI -->
          <div class="primi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Linguini aux tomates fraiches<br> et basilic</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 - 18.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="primi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tortellone farcis de riccotta<br> épinards</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 - 19.00 €</span>
            </span>
            <span class="menu-subtitle">Beurre à la sauge</span>
          </div>
          <div class="primi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tagliatelles fraiches aux oeufs<br> al pesto genovese</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 - 19.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="primi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tortellone farcis à la viande,<br> tomates fraiches &amp; basilic</a>
              <span class="menu-line"></span>
            <span class="menu-price">17.00 - 20.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="primi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tortellacci farcis de ricotta<br> &amp; cèpes tartufata</a>
              <span class="menu-line"></span>
            <span class="menu-price">17.00 - 20.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <!-- /PRIMI -->

          <!-- SECONDI -->

          <div class="secondi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Involtini</a>
              <span class="menu-line"></span>
            <span class="menu-price">22.00 €</span>
            </span>
            <span class="menu-subtitle">Escaloppe de veau farcie à la scamorza</span>
          </div>
          <div class="secondi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Carré d'agneau juste rotî </a>
              <span class="menu-line"></span>
            <span class="menu-price">24.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="secondi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Contrefilet grillé au romarin</a>
              <span class="menu-line"></span>
            <span class="menu-price">24.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="secondi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Poissons</a>
              <span class="menu-line"></span>
            <span class="menu-price">-- €</span>
            </span>
            <span class="menu-subtitle">selon disponibilité et arrivage</span>
          </div>
          <div class="secondi menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tagliata di manzo</a>
              <span class="menu-line"></span>
            <span class="menu-price">26.00 €</span>
            </span>
            <span class="menu-subtitle">Filet pur de boeuf tranché, roquette,<br> écailles de parmesan, huile d'olive sicilienne et citron</span>
          </div>
          <!-- /SECONDI -->

          <!-- DOLCE -->
          <div class="dolce menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Sorbet citron</a>
              <span class="menu-line"></span>
            <span class="menu-price">8.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="dolce menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Tiramisu</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="dolce menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Croquant au chocolat</a>
              <span class="menu-line"></span>
            <span class="menu-price">8.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="dolce menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Affogato</a>
              <span class="menu-line"></span>
            <span class="menu-price">9.00 €</span>
            </span>
            <span class="menu-subtitle">Espresso, boule de glace vanille, Amaratto &amp; panna</span>
          </div>
          <div class="dolce menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Assiette de fromages Italiens</a>
              <span class="menu-line"></span>
            <span class="menu-price">15.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Assortiment de grappa</a>
              <span class="menu-line"></span>
            <span class="menu-price">-- €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Limoncello</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Averna</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Sambuca</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Amaretto</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Fernet branca</a>
              <span class="menu-line"></span>
            <span class="menu-price">7.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <div class="digestivo menu-restaurant" style="display: none;">
            <span class="clearfix">
              <a class="menu-title" href="#">Vecchia romagna</a>
              <span class="menu-line"></span>
            <span class="menu-price">8.00 €</span>
            </span>
            <span class="menu-subtitle">&nbsp;</span>
          </div>
          <!-- /digestivo -->

        </div>
      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Nous contacter ?</h1>
          <p class="header-p">Vous avez des questions ? Vous voulez réserver ? N'hésitez pas à nous contacter par téléphone ou par mail</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-6 col-sm-12 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Numéro de téléphpone</h4>
              <p class="light-blue regular alt-p"><a href="tel:003265340740">+32 65 340 7407</a>
                <br><a href="tel:0032496757620">+32 496 757 6207</a></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-envelope"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Email</h4>
              <p class="light-blue regular alt-p"><a href="mailto:infon@toccoditalian.be">infon@toccoditalian.be</a></p>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-sm-12">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Heures d'ouvertures</h4>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Lundi</td>
                      <td>12:00–14:30</td>
                      <td>19:00–21:30</td>
                    </tr>
                    <tr>
                      <td>Mardi</td>
                      <td>12:00–14:30</td>
                      <td>19:00–21:30</td>
                    </tr>
                    <tr>
                      <td>Mercredi</td>
                      <td colspan="2">fermé</td>
                    </tr>
                    <tr>
                      <td>Jeudi</td>
                      <td>12:00–14:30</td>
                      <td>19:00–21:30</td>
                    </tr>
                    <tr>
                      <td>Vendredi</td>
                      <td>12:00–14:30</td>
                      <td>19:00–21:30</td>
                    </tr>
                    <tr>
                      <td>Samedi</td>
                      <td>fermé</td>
                      <td>19:00–21:30</td>
                    </tr>
                    <tr>
                      <td>Dimanche</td>
                      <td>12:00–14:30</td>
                      <td>fermé</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-3 col-md-6 text-center">
            <div class="widget">
              <h4 class="widget-title">Tocco d'Italia</h4>
              <address>Rue de Nimy, 114<br>7000 MONS</address>
              <p><a href="tel:003265340740">+32 65 340 740</a>
                <br><a href="tel:0032496757620">+32 496 757 620</a></p>
              <div class="social-list">
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>


</body>

</html>
