<?php
$u= $_POST['user'];
$p= $_POST['pass'];

if($u=="aounraza"&& $p=="nyedasna")
{
header("Location:q3.html");
	// "WELCOME:";	

}
else
{
	header("Location:login.php?f=1");
	//echo "you have enterd incorrect email or pass:";

}

?>