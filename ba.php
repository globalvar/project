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
    echo "<a href='logout.php'>Logout</a>";
  }


if(isset($_POST['password']))
{


$d_me = $_POST['password'];

echo $d_me;

$q = "update users set password='$d_me' where uid='".$_SESSION['uid']."' ";

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
<form action="" method="POST">
<input type="password" name="password" />
<input type="submit" value="Delete"  />
</form>
</html>


