<!DOCTYPE HTML>

<html>
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> 
		<link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" href="Header.html" />
		<link rel="stylesheet" href="assets/css/timeline.css" />
	</head>
	<body>

	

		<!-- Wrapper -->
			<div id="wrapper" >

            
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="M2l">
								<div align="center"><h1 style="background-image: images/M2L.jpg"><a href="PageAccueil.php">M2L</h1></a></div>  </a>
									
								</header>

 <!-- HAUT DE PAGE  -->
								<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
 




							<!-- Section  scolaire -->
								<section>
								
									<div class="posts">
									
									<!-- Activité 1 sur la M2l  -->

									<article>
											<a href="M2L.php" class="image"><img src="images/M2L.jpg" alt="" /></a>
											<h3> La Maison Des Ligues </h3>
											<p>Aenean ornare velit lacus, </p>
											<ul class="actions">
												<li> <button id="togg1">En savoir plus...</button>
											
											</ul>

											<div id="d1">
												<p>Ce texte appartient au premier div de ma page</p>
												<p>Ce deuxième paragraphe également</p>
									    	</div>


										</article>

										</section>


						</div>
					</div>



				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

				
							<!-- MENU -->
								<nav id="menu" class="major">
								
										<h2>Menu</h2>
								
									<ul>
										<li><a href="PageAccueil.php">Accueil</a></li>
										<li><a href="Parcours3.php">Parcours</a></li>
										<li><a href="E4.php">Epreuve E4</a></li>
										<li>
										<span class="opener">Projets</span>
											<ul>
												<li><a href="#Scolaire">Scolaire</a></li>
												<li><a href="#Pro">Professionel</a></li>
												<li><a href="#Perso">Personnel</a></li>
											</ul>
</li>
										<!-- <li><a href="Experiences5.php">Expériences</a></li> -->
										<li><a href="Veilles6.php">Veilles</a></li>
										<li><a href="CV7.php">CV</a></li>
										<li><a href="Contacts8.php">Contacts</a></li>
										<li><a href="elements.html">Elements</a></li>
</li>
										
								</nav>

						</div>
					</div>

			</div>

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