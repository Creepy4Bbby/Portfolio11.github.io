<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<html>	
    <head>
		<title>Dev</title>
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
        
<?php include('../inc/header_login.php'); ?>
        
<div class="container" style="margin-top:100px;"><center><h1>Mon compte</h1></center>
<br>
<h2>Information :</h2>
<br>    
<div class="row">
	<div class="col-md-6"><center>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><center>Nom d'utilisateur : <?php echo $userRow['user_name']; ?></center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><center>Mot de passe</center></th>
    </tr>
 <div class="cachediv"> <form method="post" action="">     
    <tr>               
      <td><center>Mot de passe actuel : <input type="password" name="amdp" required></center></td>
    </tr>
    <tr>
      <td><center>Nouveau mot de passe : <input type="password" name="nmdp" required/></center></td>        
    </tr>
    <tr>
      <td><center>Retaper mot de passe : <input type="password" name="vmdp" required/></center></td>        
    </tr>
    <tr>
      <td><center><input type="submit" name ="submit" value="Changer mon mot de passe"> </center></td>        
    </tr>
  </form>        
    <?php

        if(isset($_POST['submit'])){
        $amdp=md5($_POST['amdp']);
        $nmdp=$_POST['nmdp'];
        $vmdp=$_POST['vmdp'];
        $login=$_SESSION['user'];
        $user_pass_hache=$userRow['user_pass'];
 
            if (($amdp!='')&&($nmdp!='')&&($vmdp!='')) {
                if ($amdp==$user_pass_hache){
                    if($nmdp==$vmdp){
                    $nvmdp= md5(mysql_real_escape_string($_POST['nmdp']));
                    $sql="UPDATE users SET user_pass='$nvmdp' WHERE user_id='$login'";
                    $result=mysql_query($sql);
                    echo '<td><center>Modification du mot de passe effectuee avec succes</td></center>';
                    $_SESSION['user_pass']=$nmdp;
                    } else {
                        echo '<td><center>Erreur entre le nouveau mot de passe entr&eacute; et la verification</td></center>';
                    }
                } else {
                    echo '<td><center>Le mot de passe actuel n\'est pas valide</td></center>';
                    }
            } else {
                echo '<td><center>Veuillez remplir tous les champs pour changer votre mot de passe.</td></center>';
            }
        } else {
        echo '<td><center>Pour changer votre mot de passe merci de remplir les case si-dessus.</td></center>';
        }
    ?>
</div>
  </tbody>
</table> 
    </center></div>
    
<div class="col-md-6"><center>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><center>Changer votre adresse mail.</center></th>
    </tr>
  </thead>
 <div class="cachediv"> <form method="post" action="">    
  <tbody>
    <tr>
      <td><center>Adresse email : <?php echo $userRow['user_email']; ?></center></td>
    </tr>
    <tr>
      <td><center>Email actuel : <input name="emaila" required></center></td>
    </tr>
    <tr>
      <td><center>Nouvelle email : <input name="nemail" required></center></td>
    </tr>
    <tr>
      <td><center>Retaper votre nouvel email : <input name="nremail" required></center></td>
    </tr>
    <tr>
      <td><center><input type="submit" name ="submit1" value="Changer mon email"> </center></td>
    </tr>
  </form>
    <?php

        if(isset($_POST['submit1'])){
        $emaila=($_POST['emaila']);
        $nemail=$_POST['nemail'];
        $nremail=$_POST['nremail'];
        $login=$_SESSION['user'];
        $user_mail=$userRow['user_email'];    

            if (($emaila!='')&&($nemail!='')&&($nremail!='')) {
                if ($emaila==$user_mail){
                    if($nemail==$nremail){
                    $sql="UPDATE users SET user_email='$nemail' WHERE user_id='$login'";
                    $result=mysql_query($sql);
                    echo '<td><center>Modification de l\'adresse mail effectuee avec succes</td></center>';
                    } else {
                        echo '<td><center>Erreur entre le nouveau mail entr&eacute; et la verification</td></center>';
                    }
                } else {
                    echo '<td><center>Le mail actuel n\'est pas valide</td></center>';
                    }
            } else {
                echo '<td><center>Veuillez remplir tous les champs pour changer votre adresse mail.</td></center>';
            }
        } else {
        echo '<td><center>Pour changer votre adresse mail merci de remplir les case si-dessus.</td></center>';
        }
    ?>
      
  </tbody>
</table> 
	</center></div>
</div>    
</div>
    
<?php include('../inc/footer.php'); ?>
    
        </body>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="../assets/js/bootstrap.js"></script>

</html>