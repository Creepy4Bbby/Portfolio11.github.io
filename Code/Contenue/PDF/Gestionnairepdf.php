									
<?php 
  // Le chemin du fichier (path) 
  $file = "../images/Gestionnaire.pdf"; 
    
  // Type de contenu d'en-tête
  header("Content-type: application/pdf"); 
    
  header("Content-Length:" . filesize($file)); 
    
  // Envoyez le fichier au navigateur.
  readfile($file); 

  // ///////////

   
?>
									

							

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

