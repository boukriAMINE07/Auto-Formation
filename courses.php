<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php
include('cnx.php');

if (isset($_GET['cc'])) {
	if (isset($_SESSION['IDETUDIANT'])) {
		header("location: http://127.0.0.1/study/contact.php ");
	}else {
		echo "
		<script>alert(\" il faut etre d'abord connecte \");
		
		window.location.replace(\"http://127.0.0.1/study/connexion.php\");
		
		</script>
		";
	}

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

if (isset($_GET['c'])) {
	if (isset($_SESSION['IDETUDIANT'])) {
		header("location: http://127.0.0.1/study/commentaire.php ");
	}else {
		echo "
		<script>alert(\" il faut etre d'abord connecte \");
		window.location.replace(\"http://127.0.0.1/study/connexion.php\");
		</script>
		";
	}
}

if (isset($_GET['dec'])) {
  unset($_SESSION['NOM']);
  unset($_SESSION['PRENOM']);
  unset($_SESSION['NOM']);
  unset($_SESSION['ETAT']);
  session_destroy();
  header("Location: http://127.0.0.1/study/index.php");

}

?>
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>EMSI.CASA | Cours</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- Favicon -->
<link rel="icon" href="images/livre.png" type="image/ico">
  

<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">



  
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
          <li class="nav-item dropdown active"  >
            <a class="nav-link dropdown-toggle"  onclick="window.location.href = 'blog.php';"  id="navbarDropdown" role="button" data-toggle="dropdown"
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
          <li class="nav-item">
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


<?php
       $sql="select * from langages where  idlangage={$_GET['idlangage']}";
       $req=mysqli_query($con,$sql);
      $tab=mysqli_fetch_assoc($req);
?>

	<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(bingo/images/slider/slider-bg-1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
                <?php 
                    echo " <h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">
                        
                    {$tab['designationlangage']}
                        
						</h1>   
					<p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">{$tab['descriptionlangage']}
					</p>
					<a data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".8\" class=\"btn btn-main\" href=\"#\">Explore Us</a>";
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>




<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- section title -->
        <div class="title text-center">
          <h3>Formation Gratuite Introduit par </h3>
          <h2  style="color:#28ABE3;">EMSI.<u style="color:#000;">CASA</u></h2>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>

     
     
     
      <div class="col-md-12">
        <div class="row text-center">
        <h2>Choisi <h2 href="#" style="color:#28ABE3;">&nbsp; Un Chapitre</h2></h2>
      </div>
      </div>
      <br><br><br>
      <?php
                    $sql="select quiz,logolangage,descriptionlangage,designationlangage,chapitre.idchapitre as idchapitre ,nomChapitre,idlangage,pdf,video from chapitre natural join langages where idlangage={$tab['idlangage']}";
                    $query=mysqli_query($con,$sql);
                    $i=1;
                    $id=0;
                    if (!isset($_GET['chapitre'])) 
                     $_GET['chapitre']=1;
                     $logo="";
                    
        while ($tab=mysqli_fetch_assoc($query)) {
              if ($i==$_GET['chapitre']) {
                $pdf=$tab['pdf'];
                $video=$tab['video'];
                $quiz=$tab['quiz'];
                $chapitre=$tab['nomChapitre'];
                $language=$tab['designationlangage'];
              }

          echo "
          <div class=\"col-sm-4 row-sm-4  \">
        <div class=\"row text-center\">
        
 
            <div class=\"service-item\">
            <img width=50 style=\"border-radius: 50%; \" src=\"{$tab['logolangage']}\" >

               <h5>{$tab['nomChapitre']}</h5>
               <p>Pour voir  la  video  de la chapitre {$tab['nomChapitre']}<a href=?chapitre=$i&idlangage={$_GET['idlangage']} > cliquez ici </a>  </p>
               
               </div>
               </div>
               </div>";
               $i++;
               $id=$tab['idlangage'];
             
              }
            
              ?>


         
         
         
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->












<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
          <?php
          echo "
					<h2>$chapitre</h2>
          ";
          ?>
					<p><strong>il y'a un cours complet et un vidéo explicatif pour chaque chapitre  et a la fin tu peux passe un test
						.</strong></p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
<?php
echo "
			<div class=\"col-md-6\">
				<img src=\"bingo/images/about/about-2.png\" class=\"img-fluid\" alt=\"\">
			</div>
			<div class=\"col-md-6\">
				<ul class=\"checklist\">
					<li><strong><h4>Voici la vidéo qui explique le Chapitre  $chapitre.</h4> </strong>
          <a  href=\"javascript:openVideo();window.open();\" class=\"btn btn-main mt-20\"><i class=\"bi bi-camera-video\">VIDEO</i></a>
          <script>
          function openVideo() {
            window.open(\"$video\", \"_blank\", \"toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=700\");         
          }
          </script>
          </li>

					<li><strong><h4>Cours de $language Complet format pdf .</h4> </strong>
          <a href=\"javascript:openPdf();window.open();\" class=\"btn btn-main mt-20\"><i class=\"bi bi-camera-video\">Cours</i></a>
          <script>
          function openPdf() {
            window.open(\"$pdf\");
          }
          </script>
          </li>

					<li><strong><h4>Lancer Le Test .</h4> </strong>
          <a  href=\"javascript:openQuiz();window.open();\" class=\"btn btn-main mt-20\" >QUIZ</i></a>
          <script>
          function openQuiz() {
            window.open(\"$quiz\", \"_blank\", \"toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=700\");         
           }
          </script>
          </li>
          </li>

				</ul>
        ";
?>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->
<!--
	Start Counter Section
	==================================== -->
	
	<section  class="counter-wrapper section-sm" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title">
						<h2>Notre portée internationale</h2>
					</div>
				</div>
				<!-- first count item -->
				<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
					<div class="counters-item">
						<i class="tf-ion-ios-briefcase-outline"></i>
						<div>
							<?php
							$sql="select * from etudiants";
							$query=mysqli_query($con,$sql);
							$etd=mysqli_num_rows($query);
							echo "<span class=\"counter\" data-count=\"$etd\">0</span>";
							
							?>
						    
						</div>
						<h3>Etudiants</h3>
					</div>
				</div>
				<!-- end first count item -->
			
				<!-- second count item -->
				<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
					<div class="counters-item">
						<i class="tf-ion-ios-copy-outline"></i>
						<div>
						<?php
							$sql="select * from langages";
							$query=mysqli_query($con,$sql);
							$langages=mysqli_num_rows($query);
							echo "
						    <span class=\"counter\" data-count=\"$langages\">0</span>
							";
						?>
						</div>
						<h3>Langages</h3>
					</div>
				</div>
				<!-- end second count item -->
			
				<!-- third count item -->
				<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
					<div class="counters-item">
						<i class="tf-ion-ios-compose-outline"></i>
						<div>
						<?php
							$sql="select * from chapitre";
							$query=mysqli_query($con,$sql);
							$chapitres=mysqli_num_rows($query);
							echo "
						    <span class=\"counter\" data-count=\"$chapitres\">0</span>
							";
						?>
						</div>
			            <h3>Chapitres</h3>
						
					</div>
				</div>
				<!-- end third count item -->
				
				<!-- fourth count item -->
				<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
					<div class="counters-item kill-border">
						<i class="tf-ion-ios-bolt-outline"></i>
						<div>
						<?php
							$sql="select * from commentaires";
							$query=mysqli_query($con,$sql);
							$commentaire=mysqli_num_rows($query);
							echo "
						    <span class=\"counter\" data-count=\"$commentaire\">0</span>
							";
						?>
						</div>
						<h3>Commentaires</h3>
					</div>
				</div>
				<!-- end fourth count item -->
			</div> 		<!-- end row -->
		</div>   	<!-- end container -->
	</section>   <!-- end section -->
<!-- Start Portfolio Section
	=========================================== -->




<!--
		Start Blog Section
		=========================================== -->

<section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Autre  <span class="color">Langages</span></h2>
					<div class="border"></div>
					<p>Formation Gratuite
						.</p>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
			<?php
			$sql="SELECT * from langages where designationlangage in('Python','sql','Java') ";
			$query=mysqli_query($con,$sql);
			
			
			while (($tab=mysqli_fetch_assoc($query)) ) {
				
				
				
					
			
			
		echo "
			<article class=\"col-md-4 col-sm-6 col-xs-12 clearfix \">
				<div class=\"post-item\">
					<div class=\"media-wrapper\">
						<img src=\"{$tab['logolangage']}\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
					</div>

					<div class=\"content\">
						<h3><a href=\"single-post.html\">{$tab['designationlangage']}</a></h3>
						<p>".substr($tab['descriptionlangage'],0,300)."</p>
						<a class=\"btn btn-main\" href=\"blog.php?idlangage={$tab['idlangage']}&&cours={$tab['idlangage']}\">Read more</a>
					</div>
				</div>
			</article>
			";
			}
		

			?>
			<!-- /single blog post -->




			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

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
