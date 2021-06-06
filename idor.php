<?php

$conn = mysqli_connect("localhost","root","","project");


if(isset($_GET['id']))
{
$id = $_GET['id'];


$q = "select * from users where uid='$id' ";

$result = mysqli_query($conn, $q);

 while($row = mysqli_fetch_assoc($result)) {

    echo "uid: " . $row["uid"]. "<br/>Username: " . $row["username"];
    echo "<br/>password " . $row["password"]. "<br/>Name:".$row["name"]."<br>";
  }

}


?>


