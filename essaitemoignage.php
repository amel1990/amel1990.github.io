



<?php

$bdd = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');	
$PdoStat = $bdd->prepare('SELECT * FROM livredor ORDER BY id DESC');
	$executeIsOk=$PdoStat->execute(); 
	$contacts=$PdoStat->fetchAll();

	?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- testimonial.html  29 Nov 2019 03:34:14 GMT -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Construction & Building HTML Template">
<meta nzame="author" content="AlexaTheme">
<title>KMG | Travaux Publics</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/fontawesome.min.css">

<link rel="stylesheet" href="css/themify-icons.css">

<link rel="stylesheet" href="css/elegant-line-icons.css">

<link rel="stylesheet" href="css/elegant-font-icons.css">

<link rel="stylesheet" href="css/flaticon.css">

<link rel="stylesheet" href="css/animate.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/slick.css">

<link rel="stylesheet" href="css/slider.css">

<link rel="stylesheet" href="css/odometer.min.css">

<link rel="stylesheet" href="css/venobox/venobox.css">

<link rel="stylesheet" href="css/owl.carousel.css">

<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="css/responsive.css">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="site-preloader-wrap">
<div class="spinner"></div>
</div>
<header class="header">
<div class="primary-header">
<div class="container">
<div class="primary-header-inner">
<div class="header-logo">
<a href="#"><img src="img/logo-dark.png" alt="Indico"></a>
</div>
<div class="header-menu-wrap">
<ul class="dl-menu">
<li><a href="index.html">Accueil</a>
</li>
<li><a href="testimonial.html">Temoignage</a>
</li>
<li><a href="services-1.html">Nos réalisations</a>
<ul>
<li><a href="services-1.html">Marquage au sol</a></li>
<li><a href="services-2.html">Réparation Nid de poule</a></li>
<li><a href="services-3.html">Mise en place des panneaux de signalisation</a></li>
<li><a href="services-4.html">Bande de guidage (Usagers Aveugles) </a></li>
<li><a href="services-5.html">Mise en place des bordures</a></li>
<li><a href="services-6.html">Conception et Matérialisation des Cheminements </a></li>
</ul>
</li>

<li><a href="contact.html">Contact</a></li>
</ul>
</div>

<div class="mobile-menu-icon">
<div class="burger-menu">
<div class="line-menu line-half first-line"></div>
<div class="line-menu"></div>
<div class="line-menu line-half last-line"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>Avis de Nos Clients</h2>
<p>Votre confiance est notre priorité</p>
</div>
</div>
</section>


<section class="testimonial-section bg-grey padding">
<div class="dots"></div>
<div class="container">
<div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
	<ul ul class="rattings">
	
	<?php

	foreach ($contacts as $contact ): ?>
<li>

	<div class="testi-item d-flex align-items-center">
<img src="img/testi-1.jpg" alt="img">
 <div class="testi-content">
		<p><?= $contact['nom']?> <?= $contact['email']?> - <?= $contact['message']?></p>
<h3><?= $contact['nom']?></h3>


</div>
<i class="fa fa-quote-right"></i>
	?>
	
	<?php endforeach  ?>


	</li>

	</ul>	


</div>

</div>
</div>
</section>




<section class="widget-section padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="widget-content">
<a href="#"><img src="img/logo-dark.png" alt="brand"></a>
<p>Votre Satisfaction, Est notre Profession.</p>
</div>
</div>
<div class="col-lg-2 col-sm-6 sm-padding">
<div class="widget-content">
<h4>Entreprise</h4>
<ul class="widget-links">
<li><a href="#">A propos de nous</a></li>
<li><a href="#">Nos Services</a></li>
<li><a href="#">Avis Clients</a></li>
<li><a href="#">Contactez nous</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="widget-content">
<h4>Nos adresses</h4>
<p>962  Avenue x, Paris France, code postal </p>
<span><a href="http://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eba38e878784abaa878e938abf838e868ec5858e9f">[email&#160;protégé]</a></span>
<span>(+Xxx) xxx xxx xxx</span>
</div>
</div>
<div class="col-lg-4 col-sm-6 sm-padding">
<div class="widget-content">
<h4>Inscivez Vous</h4>
<p>entrez votre email <br>	</p>
<div class="subscribe-box clearfix">
<div class="subscribe-form-wrap">
<form action="#" class="subscribe-form">
<input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
<button type="submit" class="submit-btn">S'inscrire'</button>
<div id="subscribe-result">
<p class="subscription-success"></p>
<p class="subscription-error"></p>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class="footer-section align-center">
<div class="container">
<p>KMG2020</p>
</div>
</footer>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.12.4.min.js"></script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/vendor/tether.min.js"></script>

<script src="js/vendor/headroom.min.js"></script>

<script src="js/vendor/owl.carousel.min.js"></script>

<script src="js/vendor/smooth-scroll.min.js"></script>

<script src="js/vendor/venobox.min.js"></script>

<script src="js/vendor/jquery.ajaxchimp.min.js"></script>

<script src="js/vendor/slick.min.js"></script>

<script src="js/vendor/waypoints.min.js"></script>

<script src="js/vendor/odometer.min.js"></script>

<script src="js/vendor/wow.min.js"></script>

<script src="js/main.js"></script>
</body>

<!-- testimonial.html  29 Nov 2019 03:34:14 GMT -->
</html>