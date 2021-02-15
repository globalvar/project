<?php

$conn = mysqli_connect("localhost","root","","project");


if(isset($_POST['deleteid']))
{

$d_me = $_POST['deleteid'];

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
<form action="" method="POST">
<input type="hidden" value="1" name="deleteid"/>
<input type="submit" value="Delete"  />
</form>
</html>


