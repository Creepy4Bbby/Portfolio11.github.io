
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript">
		$(function() {
			$('a[href=#header]').click(function(){
				$('html').animate({scrollTop:0}, 'slow');
				return false;
			});
		});
	</script>

		
</head>
<body>

<h1>Comment afficher ou masquer un élément HTML</h1>
    <button id="togg1">Cliquez-moi !</button>
    <button id="togg2">Retour</button>
    <div id="d1">
        <p>Ce texte appartient au premier div de ma page</p>
        <p>Ce deuxième paragraphe également</p>
    </div>
    <div id="d2">
        <p>Il existe deux façons de cacher un élément <span>comme un div</span> en CSS :</p>
        <ul>
            <li>Utiliser visibility: hidden</li>
            <li>Utiliser display: none</li>
        </ul>
    </div>

      <script>
        let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
togg1.addEventListener("click", () => {
  if(getComputedStyle(d2).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

function togg(){
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
};
togg2.onclick = togg;
      </script>

</body>
</html>