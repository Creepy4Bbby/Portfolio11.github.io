
<!DOCTYPE html>
<html lang="fr">
<head>
<!--  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="Mettrelogo.png"/>
	<title>L2M : Réservation</title>
  <link rel="stylesheet" href="assets/css/main.css" />
	<meta name="description" content="Site de la L2M.">
	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->
<!-- Commenté par Marie car le fontawesome utilisé pr le menu est différente de celle ci -->
<!-- Commenté par dololo on supprime du coup ???? ↑↑↑↑↑↑ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	

	<link rel="stylesheet" type="text/css" href="public/css/style.css">

	<link rel="stylesheet" href="assets/css/test.css" />

		
</head>
<body>


<button id="btnPopup" class="btnPopup">Afficher Popup</button>
<div id="overlay" class="overlay">
<div id="popup" class="popup">
<h2>
Exemple simple de popup 
<span id="btnClose" class="btnClose">&times;</span>
</h2>
<div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a nulla 
a massa interdum imperdiet sed nec nibh. Proin porttitor euismod nulla ut 
interdum. Cras elementum placerat aliquam.
</div>
</div>
</div>



<script>

var btnPopup = document.getElementById('btnPopup');
var overlay = document.getElementById('overlay');
btnPopup.addEventListener('click',openMoadl);
function openMoadl() {
overlay.style.display='block';


</script>







<!-- 
<h1>Comment afficher ou masquer un élément HTML</h1>
    <button id="togg1">Cliquez-moi !</button>
   
    <div id="d1">
        <p>Ce texte appartient au premier div de ma page</p>
        <p>Ce deuxième paragraphe également</p>
    </div>
     -->
<!-- 
      <script>

let togg1 = document.getElementById("togg1");

let d1 = document.getElementById("d1");

togg1.addEventListener("click", () => {
if(getComputedStyle(d1).display = "none"){
d1.style.display = "block";
} else {
d1.style.display = "block";
}
})
      </script> -->

</body>
</html>

