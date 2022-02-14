
									
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