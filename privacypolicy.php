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
    <h1>1- Collecte de l???information</h1>
    <p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site, lorsque vous vous connectez ?? votre compte, faites un achat, participez ?? un concours, et / ou lorsque vous vous d??connectez. Les informations recueillies incluent votre nom, votre adresse e-mail, num??ro de t??l??phone, et / ou carte de cr??dit.
    En outre, nous recevons et enregistrons automatiquement des informations ?? partir de votre ordinateur et navigateur, y compris votre adresse IP, vos logiciels et votre mat??riel, et la page que vous demandez. </p> <br />
</div>




    <div>
        <h2>2- Utilisation des informations </h2>
        <p>outes les informations que nous recueillons aupr??s de vous peuvent ??tre utilis??es pour :
- Personnaliser votre exp??rience et r??pondre ?? vos besoins individuels
- Fournir un contenu publicitaire personnalis??
- Am??liorer notre site
- Am??liorer le service client et vos besoins de prise en charge
- Vous contacter par e-mail
- Administrer un concours, une promotion, ou une enqu??te
	</p>
    </div>


<div>
    <h2>3- Confidentialit?? du commerce en ligne</h2>
    <p>Nous sommes les seuls propri??taires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, ??chang??es, transf??r??es, ou donn??es ?? une autre soci??t?? pour n???importe quelle raison, sans votre consentement, en dehors de ce qui est n??cessaire pour r??pondre ?? une demande et / ou une transaction, comme par exemple pour exp??dier une commande.</p>
</div>

<div>
    <h2>4- Divulgation ?? des tiers</h2>
    <p>Nous ne vendons, n?????changeons et ne transf??rons pas vos informations personnelles identifiables ?? des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident ?? exploiter notre site Web ou ?? mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.

Nous pensons qu???il est n??cessaire de partager des informations afin d???enqu??ter, de pr??venir ou de prendre des mesures concernant des activit??s ill??gales, fraudes pr??sum??es, situations impliquant des menaces potentielles ?? la s??curit?? physique de toute personne, violations de nos conditions d???utilisation, ou quand la loi nous y contraint.

Les informations non-priv??es, cependant, peuvent ??tre fournies ?? d???autres parties pour le marketing, la publicit??, ou d???autres utilisations.</p>
</div>

<div>
    <h2>5- Protection des informations</h2>
    <p> Nous mettons en ??uvre une vari??t?? de mesures de s??curit?? pour pr??server la s??curit?? de vos informations personnelles. Nous utilisons un cryptage ?? la pointe de la technologie pour prot??ger les informations sensibles transmises en ligne. Nous prot??geons ??galement vos informations hors ligne. Seuls les employ??s qui ont besoin d???effectuer un travail sp??cifique (par exemple, la facturation ou le service ?? la client??le) ont acc??s aux informations personnelles identifiables. Les ordinateurs et serveurs utilis??s pour stocker des informations personnelles identifiables sont conserv??s dans un environnement s??curis??.</p>
</div>


<div>
    <h2>6- Est-ce que nous utilisons des cookies ?</h2>
    <p>Nos cookies am??liorent l???acc??s ?? notre site et identifient les visiteurs r??guliers. En outre, nos cookies am??liorent l???exp??rience d???utilisateur gr??ce au suivi et au ciblage de ses int??r??ts. Cependant, cette utilisation des cookies n???est en aucune fa??on li??e ?? des informations personnelles identifiables sur notre site.</p>
</div>

<div>
    <h2>7- Se d??sabonner</h2>
    <p>Nous utilisons l???adresse e-mail que vous fournissez pour vous envoyer des informations et mises ?? jour relatives ?? votre commande, des nouvelles de l???entreprise de fa??on occasionnelle, des informations sur des produits li??s, etc. Si ?? n???importe quel moment vous souhaitez vous d??sinscrire et ne plus recevoir d???e-mails, des instructions de d??sabonnement d??taill??es sont incluses en bas de chaque e-mail.</p>
</div>

<div>
    <h2>8- Consentement</h2>
    <p>En utilisant notre site, vous consentez ?? notre politique de confidentialit??.</p>
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
              &copy; Copyright ??<script>
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