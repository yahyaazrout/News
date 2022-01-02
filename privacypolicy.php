<?php
$url="https://newsapi.org/v2/everything?q=bitcoin&from=2021-12-01&sortBy=publishedAt&apiKey=0048d2a5e785498798937f56e12e1be1";
$rep = file_get_contents($url);
$newsdata = json_decode($rep);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>eNews</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/team/eNews.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
<style>
.privacypolicy { width: 90%; margin: auto; margin-top: 98px; }
h1, h2 { font-size: 20px !important; }
  ul.class-ul > li > a { color: #000 !important; }
  ul.class-ul > li > a:hover { color: #3ec1d5 !important; }
  span > i.bi { color: #3ec1d5; font-size: 20px; }
  #header .logo h1 { margin-top: 5px !important;  }
  nav#navbar>ul { margin-top: 5px; }
  nav#navbar { margin-bottom: 0px !important; }
  @media (max-width: 768px) {
    #header .logo h1 { margin-top: 10px !important; }
  }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><span>e</span>News</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a href="index.php">News</a></li>
          <li><a class="nav-link scrollto" href="index.php">Team</a></li>
          <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="privacypolicy">
<div>
    <h1>1- Collecte de l’information</h1>
    <p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site, lorsque vous vous connectez à votre compte, faites un achat, participez à un concours, et / ou lorsque vous vous déconnectez. Les informations recueillies incluent votre nom, votre adresse e-mail, numéro de téléphone, et / ou carte de crédit.
    En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP, vos logiciels et votre matériel, et la page que vous demandez. </p> <br />
</div>




    <div>
        <h2>2- Utilisation des informations </h2>
        <p>outes les informations que nous recueillons auprès de vous peuvent être utilisées pour :
- Personnaliser votre expérience et répondre à vos besoins individuels
- Fournir un contenu publicitaire personnalisé
- Améliorer notre site
- Améliorer le service client et vos besoins de prise en charge
- Vous contacter par e-mail
- Administrer un concours, une promotion, ou une enquête
	</p>
    </div>


<div>
    <h2>3- Confidentialité du commerce en ligne</h2>
    <p>Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, échangées, transférées, ou données à une autre société pour n’importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour répondre à une demande et / ou une transaction, comme par exemple pour expédier une commande.</p>
</div>

<div>
    <h2>4- Divulgation à des tiers</h2>
    <p>Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.

Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.

Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.</p>
</div>

<div>
    <h2>5- Protection des informations</h2>
    <p> Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne. Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique (par exemple, la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables. Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.</p>
</div>


<div>
    <h2>6- Est-ce que nous utilisons des cookies ?</h2>
    <p>Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts. Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations personnelles identifiables sur notre site.</p>
</div>

<div>
    <h2>7- Se désabonner</h2>
    <p>Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et mises à jour relatives à votre commande, des nouvelles de l’entreprise de façon occasionnelle, des informations sur des produits liés, etc. Si à n’importe quel moment vous souhaitez vous désinscrire et ne plus recevoir d’e-mails, des instructions de désabonnement détaillées sont incluses en bas de chaque e-mail.</p>
</div>

<div>
    <h2>8- Consentement</h2>
    <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
</div>




</div>

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>eNews</h2>
                </div>
                  <p>eNews is a website specialized in Latest News.<br> Here you can find activities to practise your reading skills.</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
              <h4>information</h4>
                <div class="footer-contacts">
                  <ul class="class-ul" >
                    <li><span><i class="bi bi-telephone-outbound"></i> </span> <a href="tel:0674629837"> +212/674.62.98.37</a></li>
                    <li><span><i class="bi bi-envelope-check"></i> </span> <a href="mailto:azwebdeveloppement@gmail.com">azwebdeveloppement@gmail.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
                <div class="footer-head">
                  <h4>Our Services</h4>
                </div>
              <ul class="class-ul">
                <li><a>- Web Development</a></li>
                <li><a>- Database management</a></li>
                <li><a>- Graphic Design</a></li>
                <li><a>- Networking</a></li>
                <li class="link"><a  href="privacypolicy.php"> &nbsp; privacy policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
              &copy; Copyright ©<script>
          document.write(new Date().getFullYear());
        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a class="credits" href="index.php"> eNews Team</a>
              </p>
            </div>
            <div >
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>