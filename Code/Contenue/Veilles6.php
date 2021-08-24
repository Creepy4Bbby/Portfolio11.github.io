<?php

include 'Header.php';

?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="test.css">
	</head>
	<body class="is-preload">


	<div align="center"><h1><a href="PageAccueil.php">Veilles</h1></a></div>

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Main -->
					<div id="main">
						<div class="inner">



									<!-- Header -->
									<header id="header">
									<a href="Contacts8.php" class="logo"><strong>Me suivre...&nbsp </strong> &nbsp &nbsp &nbsp ici &nbsp →  </a>
									<ul class="icons">
										<li><a href="https://github.com/Creepy4Bbby" class="icon brands fab fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="Contacts8.php" class="icon brands fab fa-linkedin "><span class="label">Linkdin</span></a></li>
										
									</ul>
								</header>




							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Veilles</h1>
											<p>Voici les différentes veilles sur lesquelles je travaille.</p>
										</header>
										<p>Vous retrouverez dans la page ci-dessous quatres veilles portants sur des thèmes différents concernant l'informatique.</p>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>

							<!-- Veilles -->
								<section>
									<div class="posts">

										<!-- Veille 1 -->
										<article>

											<!-- Affichage de base Veille 1 -->
											<a class="image" id="veille1"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Veille 1</h3>
											<p>[Résumé veille 1]</p>

											<!-- Contenu Popup Veille 1 -->
											<div id="overlayv1" class="overlay">
												<div id="popupv1" class="popup">
													<h2>
														Veille 1 <!-- Titre Veille -->
														<span id="btnClosev1" class="btnClose">&times;</span> <!-- Bouton Fermer Veille -->
													</h2>
													<div>
														Descriptif détaillé de la veille 1. <!-- Corps de la Veille -->
													</div>
												</div>
											</div>

											<!-- Script Veille 1 -->
											<script>
												var veille1 = document.getElementById('veille1');
												var overlayv1 = document.getElementById('overlayv1');
												veille1.addEventListener('click',openMoadl);
												function openMoadl() {
													overlayv1.style.display='block';
												}
												var btnClosev1 = document.getElementById('btnClosev1');
												btnClosev1.addEventListener('click',closeModal);
												function closeModal() {
													overlayv1.style.display='none';
												}
											</script>
										</article>

										<!-- Veille 2 -->
										<article>

											<!-- Affichage de base Veille 2 -->
											<a class="image" id="veille2"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Veille 2</h3>
											<p>[Résumé veille 2]</p>

											<!-- Contenu Popup Veille 2 -->
											<div id="overlayv2" class="overlay">
												<div id="popupv2" class="popup">
													<h2>
														Veille 2 
														<span id="btnClosev2" class="btnClose">&times;</span>
													</h2>
													<div>
														Descriptif détaillé de la veille 2.
													</div>
												</div>
											</div>

											<!-- Script Veille 2 -->
											<script>
												var veille2 = document.getElementById('veille2');
												var overlayv2 = document.getElementById('overlayv2');
												veille2.addEventListener('click',openMoadl);
												function openMoadl() {
													overlayv2.style.display='block';
												}
												var btnClosev2 = document.getElementById('btnClosev2');
												btnClosev2.addEventListener('click',closeModal);
												function closeModal() {
													overlayv2.style.display='none';
												}
											</script>
										</article>

										<!-- Veille 3 -->
										<article>

											<!-- Affichage de base Veille 3 -->
											<a class="image" id="veille3"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Veille 3</h3>
											<p>[Résumé veille 3]</p>

											<!-- Contenu Popup Veille 3 -->
											<div id="overlayv3" class="overlay">
												<div id="popupv3" class="popup">
													<h2>
														Veille 3 
														<span id="btnClosev3" class="btnClose">&times;</span>
													</h2>
													<div>
														Descriptif détaillé de la veille 3.
													</div>
												</div>
											</div>

											<!-- Script Veille 3 -->
											<script>
												var veille3 = document.getElementById('veille3');
												var overlayv3 = document.getElementById('overlayv3');
												veille3.addEventListener('click',openMoadl);
												function openMoadl() {
													overlayv3.style.display='block';
												}
												var btnClosev3 = document.getElementById('btnClosev3');
												btnClosev3.addEventListener('click',closeModal);
												function closeModal() {
													overlayv3.style.display='none';
												}
											</script>
										</article>

										<!-- Veille 4 -->
										<article>

											<!-- Affichage de base Veille 4 -->
											<a class="image" id="veille4"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Veille 4</h3>
											<p>[Résumé veille 4]</p>

											<!-- Contenu Popup Veille 4 -->
											<div id="overlayv4" class="overlay">
												<div id="popupv4" class="popup">
													<h2>
														Veille 4 
														<span id="btnClosev4" class="btnClose">&times;</span>
													</h2>
													<div>
														Descriptif détaillé de la veille 4.
													</div>
												</div>
											</div>

											<!-- Script Veille 4 -->
											<script>
												var veille4 = document.getElementById('veille4');
												var overlayv4 = document.getElementById('overlayv4');
												veille4.addEventListener('click',openMoadl);
												function openMoadl() {
													overlayv4.style.display='block';
												}
												var btnClosev4 = document.getElementById('btnClosev4');
												btnClosev4.addEventListener('click',closeModal);
												function closeModal() {
													overlayv4.style.display='none';
												}
											</script>
										</article>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							


							<!-- MENU -->
							<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="PageAccueil.php">Accueil</a></li>
										<li><a href="Parcours3.html">Parcours</a></li>
										<li><a href="Projets4.php">Projets</a></li>
										<li><a href="Experiences5.html">Expériences</a></li>
										<li><a href="Veilles6.html">Veilles</a></li>
										<li><a href="CV7.html">CV</a></li>
										<li><a href="Contacts8.html">Contacts</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Etiam Dolore</a></li>
									
</nav>



							<!-- Section -->
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>