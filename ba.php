<?php

session_start();


if(!isset($_SESSION['uid']))
{
		die("Login First");
}
else
{



$conn = mysqli_connect("localhost","root","","project");


$q = "select * from users where uid='".$_SESSION['uid']."' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

 	$_SESSION['uid'] =  $row["uid"];
    echo "uid: " . $row["uid"]. " <br/>Username: " . $row["username"]. "<br/> password " . $row["password"]. " <br/> Name:".$row["name"]."<br>";
  }


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



}


?>

<html>
<form action="" method="GET">
<input type="hidden" value="" name="deleteid"/>
<input type="submit" value="Delete"  />
</form>
</html>


