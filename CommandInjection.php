<?php

if(isset($_POST['webaddress']))
{
	$webAddress = $_POST['webaddress'];
	
	echo shell_exec("dig +short ".$webAddress);
}

?>
Enter website name to get IP Address:
<form action="" method="POST">
	<input type="text" name="webaddress" />
	<input type="submit" value="Submit"/>
</form>