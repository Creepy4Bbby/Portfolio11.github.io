<?php
include 'h.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet"  href="bibliotheque.css">
		<link rel="stylesheet"  href="bootstrap-4.6.0-dist">
		<link rel="stylesheet" type="text/class" href="Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet"  href="Caroussel.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/carousel.css" />
		<link rel="stylesheet" href="test.css"/>
	</head>

	<!-- <body BGCOLOR=#6495ED> -->

	<body BGCOLOR=#64A2E6C2>
		<br>
	<div align="center"><h3 style="margin-bottom: 4em ;"> P  O  R  T  F  O  L  I  O   </h3></div>
<div align="center">

	<br><br>
	
			<br><button><a class="nav-item" href="#">&nbsp;Accueil&nbsp;</a></button>
		
			<button><a class="nav-link" href="#">&nbsp;Parcours&nbsp;</a></button>
		

			<button><a class="nav-link" href="#">&nbsp;Projets&nbsp;</a></button>
		

			<button><a class="nav-link" href="#">&nbsp;Experiences&nbsp;</a></button>
		

			<button><a class="nav-link" href="#">&nbsp;Veilles&nbsp;</a></button>
		

			<button><a class="nav-link" href="#">&nbsp;CV&nbsp;</a></button>

		

		            <a class="nav-link" href="#">&nbsp;Contacts&nbsp;</a>
		
</tr>

</div>
<!-- Nav -->
<nav id="nav" >
	
		<ul>

	<li class = 'current' style="margin-left: 25em ;">
		<!-- <a href='#banner' class='smooth'>Qui suis-je ?</a></li> -->
		<li><a href='PageAccueil.php'>Accueil</a>
		<li><a href='professionnel.php'>Parcours</a>
		<li><a href='projets.php'>Projets</a></li>
		<li><a href='professionnel.php'>Expériences</a>
		<li><a href='Page7.php'>Veilles</a></li>
		<li><a href='professionnel.php'>CV</a>

<!-- NOTE POUR JULES -->
		<!-- <button id="btnCV" class="btnCV">&nbsp;CV&nbsp;</button>
<div id="downCV" class="downCV">
    <div id="cv" class="cv">
        <h3>
            Voulez-vous télécharger le CV ?
            <span id="cvClose" class="cvClose">&times;</span>
        </h3>
        <div>
            <button id="btnOui" class="chxCV">Oui</button>             <button id="btnNon" class="chxCV">Non</button>
        </div>
    </div>
</div> -->


<!-- NOTE POUR JULES  -->

<li><a href='Page8.php'>Contacts</a></li>
		
		
	
		</ul>						
		
	</nav>

     
<!-- ------- --------------------------------------------------------------------------------------------------------------------------------------------------->
<p style="margin-top: 80px; margin-bottom: 80px;" class="container">
							
<h1> <u> Accueil : </u></h1>


						</p>


						

						
            <section>
						<ul class="slides">
							
							<input type="radio" name="radio-btn" id="img-1" checked />
							<li class="slide-container">
								<div class="slide">
									<img src="images/Java.png" />
								</div>
								<div class="navi">
									<label for="img-6" class="prev">&#x2039;</label>
									<label for="img-2" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-2" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/Java.png" />
								</div>
								<div class="navi">
									<label for="img-1" class="prev">&#x2039;</label>
									<label for="img-3" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-3" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/Java.png" />
								</div>
								<div class="navi">
									<label for="img-2" class="prev">&#x2039;</label>
									<label for="img-4" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-4" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/Java.png" />
								</div>
								<div class="navi">
									<label for="img-3" class="prev">&#x2039;</label>
									<label for="img-5" class="next">&#x203a;</label>
								</div>
							</li>
					
							<li class="navi-dots">
							  <label for="img-1" class="navi-dot" id="img-dot-1"></label>
							  <label for="img-2" class="navi-dot" id="img-dot-2"></label>
							  <label for="img-3" class="navi-dot" id="img-dot-3"></label>
							  <label for="img-4" class="navi-dot" id="img-dot-4"></label>
							</li>
						</ul>

				</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<br>
<br>
<br>
<br>

<div align="center">
		<ul id="menuu"> 

	


 </body>
</html>

<script>
    var btnCV = document.getElementById('btnCV');
    var downCV = document.getElementById('downCV');
    btnCV.addEventListener('click',openMoadl);
    function openMoadl() {
        downCV.style.display='block';
    }
    var cvClose = document.getElementById('cvClose');
    cvClose.addEventListener('click',closeModal);
    function closeModal() {
        downCV.style.display='none';
    }

    var btnOui = document.getElementById('btnOui');
    btnOui.addEventListener('click', dlCV);
    function dlCV() {

        var downloadUrl = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";
        var downloading = browser.downloads.download({
            url : downloadUrl,
            filename : 'CV.pdf',
            conflictAction : 'uniquify'
        });

    }

	var btnNon = document.getElementById('btnNon');
	btnNon.addEventListener('click', gotoCV);
    function gotoCV() {
		window.location.replace("/GitHub/Porfolio/Page7.php");
    }

</script>


<br><br><br>
<button id="btnUP" class="btnUP">&nbsp;UP&nbsp;</button>

<script>
	var btnUP = document.getElementById('btnUP');
	btnUP.addEventListener('click',pageUP);
	function pageUP() {
        window.scrollTo(0, 0);
    }
</script>

