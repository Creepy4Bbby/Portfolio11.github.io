<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<link rel="stylesheet" href="testBouton.css">
        <script src="BoutonsCV.js"></script>
        <script src="BoutonsVeilles.js"></script>
        <script src="BoutonUp.js"></script>
	</head>
<body>

<button id="btnPopup" class="btnPopup"><img src="image/logo.jpg" alt="Logo Efrei" height=150px></button>
<div id="overlay" class="overlay">
    <div id="popup" class="popup">
        <h2>
            Veille 1 
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
    }
    var btnClose = document.getElementById('btnClose');
    btnClose.addEventListener('click',closeModal);
    function closeModal() {
        overlay.style.display='none';
    }
</script>



<br><br><br>
<button id="btnCV" class="btnCV">&nbsp;CV&nbsp;</button>
<div id="downCV" class="downCV">
    <div id="cv" class="cv">
        <h3>
            Voulez-vous télécharger le CV ?
            <span id="cvClose" class="cvClose">&times;</span>
        </h3>
        <div>
            <button id="btnOui" class="chxCV">Oui</button>             <button id="btnNon" class="chxCV">Non</button>
			<iframe id="my_iframe" style="display:none;" src="https://homepages.cae.wisc.edu/~ece533/images/airplane.png"></iframe>
        </div>
    </div>
</div>
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
		function Download(url) {
    	document.getElementById('my_iframe').src = url;
		};
    }

	var btnNon = document.getElementById('btnNon');
	btnNon.addEventListener('click', gotoCV);
    function gotoCV() {
		window.location.replace("/GitHub/Portfolio11/Code/Contenue/Cv7.html");
    }

</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<button id="btnUP" class="btnUP">&nbsp;UP&nbsp;</button>

<script>
	var btnUP = document.getElementById('btnUP');
	btnUP.addEventListener('click',pageUP);
	function pageUP() {
        window.scrollTo(0, 0);
    }
</script>

</body>
</html>