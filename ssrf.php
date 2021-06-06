<?php

if(isset($_POST['url']))
{
echo "<img src='".$_POST['url']."'/>";
}
?>


<form action="" method="POST">
	<input type='text' name='url' placeholder='enter link'/>
	<input type='submit' value='Submit'/>
	</form>