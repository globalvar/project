<?php

$conn = mysqli_connect("localhost","dvwa","password","project");


if(isset($_GET['id']))
{
$id = $_GET['id'];


$q = "select * from users where uid='$id' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

    echo "uid: " . $row["uid"]. " Username: " . $row["username"]. " password " . $row["password"]. " Name:".$row["name"]."<br>";
  }

}


?>


