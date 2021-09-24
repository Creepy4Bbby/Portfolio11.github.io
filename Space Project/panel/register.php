<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header('Location: index.php');
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
    $upass2 = md5(mysql_real_escape_string($_POST['pass2']));
    if($upass != $upass2) exit('Passwords do not match');
	
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
	
	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')"))
		{
			?>
			<script>alert('Inscription réussi ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('Une erreur est survenue !');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Email déjà utiliser');</script>
			<?php
	}
	
}
?>

<html>

<head>

  <meta charset="UTF-8">
  <title>UniReal - Connexion au panel</title>

    <script src="js/prefixfree.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
    
<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
		  <div>Uni<span>Real</span></div><br>
		</div>
		<br>
    <form method="post">
		<div class="login">
		<div>Inscription</div><br><br><br>
            
				<input type="text" placeholder="Nom d'utilisateur" name="uname" required ><br><br>
				<input type="mail" placeholder="E-mail" name="email" required ><br>
				<input type="password" placeholder="Mot de passe" name="pass" required ><br>
                <input type="password" placeholder="Repeter de mot de passe" name="pass2"><br>
            
		<div class="button">
				<button type="submit" name="btn-signup">S'inscrire</button><br><br><br>
		</div>
				<div>Déjà inscrit ?
				    <a href="index.php" style="color:#ED2233">
                        Se connecter</a>
                </div>
		</div>
    </form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <link href="css/main.css" rel="stylesheet">
    
</body>

</html>
