<?php

$conn = mysqli_connect("localhost","root","","project");


if(isset($_POST['username']) && isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];


$q = "select * from users where username='$username' and password='$password' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

    echo "uid: " . $row["uid"]. " Username: " . $row["username"]. " password " . $row["password"]. " Name:".$row["name"]."<br>";
  }

}


?>

<html>
<form action="" method="POST">
<input type='text' name='username'/>
<input type='pass' name='password' />
<input type='submit' value='submit' />
</form>
</html>


