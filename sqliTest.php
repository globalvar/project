<?php

$conn = mysqli_connect("localhost","navneet","navneet","project");



if(isset($_GET['username']) && isset($_GET['password']))
{
$username = $_GET['username'];
$password = $_GET['password'];


$q = "select * from users where username='$username' and password='$password' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

    echo "uid: " . $row["uid"]. " Username: " . $row["username"]. " password " . $row["password"]. " Name:".$row["name"]."<br>";
  }



}




?>

<html>
<form action="" method="GET">
<input type='text' name='username'/>
<input type='pass' name='password' />
<input type='submit' value='submit' />
</form>
</html>


