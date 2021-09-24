<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root","mdp"))
{
	die('probleme de co ! --> '.mysql_error());
}
if(!mysql_select_db("unireal_user"))
{
	die('DB selection probleme! --> '.mysql_error());
}

?>