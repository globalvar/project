<?php
$conn = mysqli_connect("localhost","root","","project");

session_start();

if(isset($_POST['pass']) && isset($_POST['cpass']))
{
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	
	if($pass == $cpass)
	{
		$q = "update users set password='$pass' where uid=".$_SESSION['uid']."";

		mysqli_query($conn,$q);

		echo "<script>alert('Password succesfully changed.')</script>";


	}else
	{
		echo "Password does not match";
	}
}



if(!isset($_SESSION['uid']))
{


header('location:otp.php');

}
else
{



$q = "select * from users where uid=".$_SESSION['uid']."";

$result = mysqli_query($conn, $q);

$temp;

 while($row = mysqli_fetch_assoc($result)) {

 	$temp = $row["name"];
    //echo "uid: " . $row["uid"]. " Username: " . $row["username"]. " password " . $row["password"]. " Name:".$row["name"]."<br>";
  }


echo "Welcome ".$temp;

echo "<br/>
Change Password
<form action='' method='post'>
<input type='password' name='pass' placeholder='Enter Password'/>
<br/>
<input type='password' name='cpass' placeholder='Confirm Password'/>
<br/>
<input type='submit' value='submit'/>
</form>

";
echo "<a href='logout.php'>Logout</a>";

}

?>
