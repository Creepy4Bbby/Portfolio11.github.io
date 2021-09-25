<!DOCTYPE HTML>

<html>
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> 
		<link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" href="Header.html" />
	</head>
	<body class="is-preload">

	

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="header">
									<a href="Contacts8.php" class="logo"><strong>Me suivre...&nbsp </strong> &nbsp &nbsp &nbsp ici &nbsp →  <div align="center"><h1><a href="PageAccueil.php">Projets</h1></a></div>  </a>
									<ul class="icons">
									
										<li><a href="https://github.com/Creepy4Bbby" class="icon brands fab fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="Contacts8.php" class="icon brands fab fa-linkedin "><span class="label">Linkdin</span></a></li>
										
									</ul>
								</header>

 
								<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
 

								<!-- HAUT DE PAGE  -->
 <script>
			 jQuery(function(){
				 $(function () {
					 $(window).scroll(function () {
						 if ($(this).scrollTop() > 200 ) { 
							 $('#scrollUp').css('right','30px');
						 } else { 
							 $('#scrollUp').removeAttr( 'style' );
						 }
  
					 });
				 });
			 });
 </script>
  

						
												<a href="Projets4.php"  id="Scolaire" class="button"> Retour à la page Projets</a>
											
										
									
<?php 
  // Le chemin du fichier (path) 
  $file = "images/doc.pdf"; 
    
  // Type de contenu d'en-tête
  header("Content-type: application/pdf"); 
    
  header("Content-Length: " . filesize($file)); 
    
  // Envoyez le fichier au navigateur.
  readfile($file); 
?>
									

							

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<!-- icône haut de page -->
			<div id="scrollUp">
<a href="#top" class="icon solid fas fa-cloud-upload-alt fa-2x"></a>
</div>

	</body>
</html>

<script>

let togg1 = document.getElementById("togg1");

let d1 = document.getElementById("d1");

togg1.addEventListener("click", () => {
if(getComputedStyle(d1).display != "none"){
d1.style.display = "none";
} else {
d1.style.display = "block";
}
})
      </script>