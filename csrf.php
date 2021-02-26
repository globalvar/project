<?php

$conn = mysqli_connect("localhost","navneet","navneet","project");


if(isset($_GET['deleteid']))
{

$d_me = $_GET['deleteid'];

$q = "Delete from users where uid='$d_me' ";

if(mysqli_query($conn, $q))
{
 echo "Success!";
 }else
{
 echo "Failed!";
 }


}


?>

<html>
<form action="" method="GET">
<input type="hidden" value="5" name="deleteid"/>
<input type="submit" value="Delete"  />
</form>
</html>


