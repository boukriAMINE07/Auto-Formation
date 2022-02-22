<!DOCTYPE html>
<?php
include("cnx.php");
if(isset($_GET['c'])){
	if(isset($_SESSION['IDETUDIANT']))
		header("Location: http://127.0.0.1/study/commentaire.php");
		else echo"
		<script> 
		alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
		window.location.replace(\"http://127.0.0.1/study/connexion.php\");
  
		</script>
		";
}
if (isset($_GET['dec'])) {
	unset($_SESSION['NOM']);
	unset($_SESSION['PRENOM']);
	unset($_SESSION['NOM']);
	unset($_SESSION['ETAT']);
	session_destroy();


   header("Location: http://127.0.0.1/study/index.php");
 
 
  
  }
	
  
if(isset($_GET['cc'])){
		if(isset($_SESSION['IDETUDIANT']))
			header("Location: http://127.0.0.1/study/contact.php");
			else echo"
			<script> 
			alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
			window.location.replace(\"http://127.0.0.1/study/connexion.php\");
  
			</script>
			";
}

if(isset($_GET['cours'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/study/courses.php?idlangage={$_GET['cours']}");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
				window.location.replace(\"http://127.0.0.1/study/connexion.php\");

		</script>
		";
	 }

?>





<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>EMSI.CASA | About us</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="icon" href="images/livre.png" type="image/ico">
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="bingo/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="bingo/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="bingo/plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="bingo/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="bingo/plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="bingo/css/style.css">  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


 <!-- <--  -->
  <!-- Fixed Navigation -->
<!-- ==================================== --> 
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <h2 style="color:#28ABE3;"><strong>EMSI<a href="index.php" style="color:#fff;"><span>.CASA</span></strong></h2>

      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
		  <li class="nav-item ">
		   <a class="nav-link" href="index.php">Accueil</a>
		  </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">à propos de nous</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" onclick="window.location.href = 'blog.php';"  id="navbarDropdown"  data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Cours
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
          	$sql="SELECT * FROM langages";
            $query=mysqli_query($con,$sql);
            while ($tab=mysqli_fetch_assoc($query)) {
              echo "<a class=\"dropdown-item\" href=index.php?cours={$tab['idlangage']}>{$tab['designationlangage']}</a>
              ";
            }

							?>
            </div>
          </li>
         
         
         
          <li class="nav-item ">
               <a class="nav-link" href="index.php?cc=oui">Contact</a>
           </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?c=oui">Commentaire</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php
              if (isset($_SESSION['IDETUDIANT'])) {
                echo "<a class=\"dropdown-item\" href=index.php?dec=oui>Déconnexion</a>";
			}else {
                echo "<a class=\"dropdown-item\" href=connexion.php>Connexion</a>";
                echo "<a class=\"dropdown-item\" href=inscription.php>Inscription</a>";
			}
			?>
              <a class="dropdown-item" href="blog.php">Blog Page</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">About Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<br>
				<h2>EMSI.CASA</h2>
				<br>
				<p>Bienvenu dans notre site web <strong> EMSI.CASA </strong>,<br> Nous ésperons de vous faciliter l'apprentissage des cours que nous vous proposons.</p>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="bingo/images/company/company-image.jpg" alt="">
			</div>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Notre place de marche</h3>
				<p>Chez <strong> EMSI.CASA </strong>, nous pensons que les meilleurs enseignants du monde ne se trouvent pas toujours dans les salles de classe. Nos formateurs viennent de presque tous les pays et proposent des cours dans plus de 65 langues sur le développement informatique.</p>
				<img src="bingo/images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
				<h3>Notre vision</h3>
				<p>le site web <strong> EMSI.CASA </strong> présente Le langage de programmation des pages Web de programmation,<br>En langage populaire,Un langage d'accès aux bases de données et un langage de programmation de serveur Web</p>
				<img src="bingo/images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>










<section class="section grallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Aperçu de la Galerie</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
					<img src="bingo/images/company/gallery-1.jpg" alt="">
					<img src="bingo/images/company/gallery-2.jpg" alt="">
					<img src="bingo/images/company/gallery-3.jpg" alt="">
					<img src="bingo/images/company/gallery-4.jpg" alt="">
					<img src="bingo/images/company/gallery-5.jpg" alt="">
					<img src="bingo/images/company/gallery-5.jpg" alt="">
					<img src="bingo/images/company/gallery-1.jpg" alt="">
					<img src="bingo/images/company/gallery-2.jpg" alt="">
					<img src="bingo/images/company/gallery-3.jpg" alt="">
					<img src="bingo/images/company/gallery-4.jpg" alt="">
					<img src="bingo/images/company/gallery-5.jpg" alt="">
					<img src="bingo/images/company/gallery-5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>



	<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2>Our Team</h2>
					
					
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
					
					
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="bingo/images/team/member-2.jpeg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Boukri Amine</h3>
						<span>Web Developer</span>
						<p>realisation de projet par un éleve ingénieur à EMSI CASABLANCA..</p>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->








<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
		<h6>Distributed by <a href="https://themewagon.com/">Themewagon</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="bingo/plugins/jquery/jquery.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="bingo/plugins/google-map/gmap.js"></script>

    <!-- Form Validation -->
    <script src="bingo/plugins/form-validation/jquery.form.js"></script> 
    <script src="bingo/plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <script src="bingo/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="bingo/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="bingo/plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="bingo/plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="bingo/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="bingo/plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="bingo/js/script.js"></script>

  </body>
  </html>