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
	<body><br><br><br><br>
<?php include('../inc/header_login.php'); ?>
<?php include('../inc/footer.php'); ?>
	</body>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="../assets/js/bootstrap.js"></script>
</html>