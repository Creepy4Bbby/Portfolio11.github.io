<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_pass FROM users WHERE user_email='$email'");
    
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); 
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Mot de passe ou email faux');</script>
        <?php
	}
	
}
?>

<html>

<head>

  <meta charset="UTF-8">

  <title>UniReal - Connexion au panel</title>

    <script src="js/prefixfree.min.js"></script>
</head>
    
<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Space<span>Project</span></div>
		</div>
		<br>
    
		<form method="post">
		<div class="login">
				<input type="text" placeholder="Email" name="email"><br>
				<input type="password" placeholder="Mot de passe" name="pass"><br>
            
				<div class="button">
				<button type="submit" name="btn-login">Se connecter</button><br><br><br><br>
				</div>
            
				<div>Pas encore inscrit ?
				    <a href="register.php" style="color:#ED2233">
                    S'inscrire</a></div>
		        </div>
		</form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <link href="css/main.css" rel="stylesheet">
    
</body>

</html>