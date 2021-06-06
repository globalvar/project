<?php
$conn = mysqli_connect("localhost","root","","project");

session_start();


if(!isset($_SESSION['uid']))
{

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];





$q = "select * from users where username='$username' and password='$password' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

 	$_SESSION['uid'] =  $row["uid"];
    //echo "uid: " . $row["uid"]. " Username: " . $row["username"]. " password " . $row["password"]. " Name:".$row["name"]."<br>";
  }

/*
header('Set-cookie:'.$_SESSION['uid']);
echo "from the session ".$_SESSION['uid'];

echo "<a href='logout.php'>Logout</a>";
*/
$temp = rand(1000,9999);

$q1 = "update users set otp ='$temp' where uid =" .$_SESSION['uid']."" ;

mysqli_query($conn,$q1);

echo "<style>

#form1
{
	display:none;
}
</style>";




echo "
<form action='checkotp.php' method='post'>
<input type='text' name='otp' placeholder='Enter OTP'/>
<input type='submit' value='submit'/>
</form>

";
echo "<a href='logout.php'>Logout</a>";

}

}
else
{
echo "already logged in
<style>
#form1{
	display:none;
}
</style>

";

echo "
<form action='checkotp.php' method='post'>
<input type='text' name='otp' placeholder='Enter OTP'/>
<input type='submit' value='submit'/>
</form>

";
echo "<a href='logout.php'>Logout</a>";

}

?>


<form id="form1" action="" method="POST">
	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password"/>
	<input type="submit" value="login" />
</form>