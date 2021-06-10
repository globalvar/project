<?php

$conn = mysqli_connect("localhost","root","","project");



if(isset($_POST['username']) && isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];


$q = "select * from users where username='$username' and password='$password' ";

$result = mysqli_query($conn, $q);

echo "<h3>Welcome!</h3><style>#signin{display:none} form{display:none}</style>";

 while($row = mysqli_fetch_assoc($result)) {

    echo "<b>uid: </b>" . $row["uid"]. "<br/> <b>Username: </b>" . $row["username"];
    echo "<br/> <b>Password </b>" . $row["password"]. "<br/> <b>Name:</b>".$row["name"]."<br>";
  }



}




?>

<html>
<h3 id='signin'>Sign In</h3>
<form action="" method="POST">
<input type='text' name='username' placeholder='username' />
<input type='password' name='password' placeholder='password' />
<input type='submit' value='submit' />
</form>
</html>


