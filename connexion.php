<!DOCTYPE html>
<?php
include("cnx.php");

if (isset($_GET['cours'])) {
    if (isset($_SESSION['IDETUDIANT'])) {
        header("location: http://127.0.0.1/study/courses.php?idlangage={$_GET['cours']}");
    }else {
        echo "
        <script>alert(\" il faut etre d'abord connecte \");
        
        window.location.replace(\"http://127.0.0.1/study/connexion.php\");
        
        </script>
        ";
    }
}

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














 if (isset($_POST['ok'])) {
    $sql="SELECT * FROM etudiants where  emailEtudiant='{$_POST['email']}'";
    $query=mysqli_query($con,$sql);
    $t=mysqli_fetch_assoc($query);
    if(isset($t['NOM'])) {
        if($_POST['mpass']!=$t['motpasse'])
            $i=2;
            else {
              $_SESSION['IDETUDIANT']=$t['IDETUDIANT'];
                  $_SESSION['NOM']=$t['NOM'];
                  $_SESSION['PRENOM']=$t['PRENOM'];
                  $_SESSION['ETAT']=$t['ETAT'];
              header("Location: http://127.0.0.1/study/index.php");
                }
                        }
      else
             $i=2;
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

  <title>EMSI.CASA | Connexion</title>

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


  
<!--
Fixed Navigation
==================================== -->
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
          <li class="nav-item ">
            <a class="nav-link" href="about.php">à propos de nous</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown" onclick="window.location.href = 'blog.php';"  role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Cours
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
          	$sql="SELECT * FROM langages";
            $query=mysqli_query($con,$sql);
            while ($tab=mysqli_fetch_assoc($query)) {
              echo "<a class=\"dropdown-item\" href=?cours={$tab['idlangage']}>{$tab['designationlangage']}</a>
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
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
             role="button"  data-toggle="dropdown"
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
				<h2>Connexion</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Connexion</li>
				</ol>
			</div>
		</div>
	</div>
</section>

 <!--Start Contact Us
	=========================================== -->		
<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>Connectez vous à votre Compte</h2>
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Contact Details</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: +880-31-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-globe"></i>
						<span>Fax: +880-31-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: hello@meghna.com</span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form  method="post" role="form">


        <div class="form-group">
        		<input type="email" placeholder="Votre Email" class="form-control" name="email" id="email">
            
            <p>Ne partage pas Votre email et Votre mot de passe </p>
        </div>
        
        <div class="form-group">
        		<input type="password" placeholder="votre password" class="form-control" name="mpass" id="subject">
        </div>
					<div id="success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="error" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					<div id="cf-submit">
						<input type="submit" id="contact-submit" name="ok" class="btn btn-transparent" value="Submit">
					</div>
          <br>						
					<div class="form-group">
          <h5>Vous n'avez pas de compte <a href="inscription.php">S'inscrire</a></h5>

				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->




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