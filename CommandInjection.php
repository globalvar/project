<?php

if(isset($_POST['webaddress']))
{
	$webAddress = $_POST['webaddress'];
	
	echo "The IP address of ".$webAddress." is <b> ".shell_exec("dig +short ".$webAddress)."</b><br/>";
	//die();


}

?>
Enter website name to get IP Address:
<form action="" method="POST">
	<input type="text" name="webaddress" />
	<input type="submit" value="Submit"/>
</form>