<?php
$conn = mysqli_connect("localhost","root","","project");

session_start();

if(isset($_POST['otp']))
{
	$otp = $_POST['otp'];


    $q = "select otp from users where uid=".$_SESSION['uid']."";

    $r = mysqli_query($conn,$q);

    $row = mysqli_fetch_assoc($r);

    $x = $row['otp'];
    

    if($x == $otp)
    {
    	echo "OTP matched<br/>";


		$q = "select * from users where uid=".$_SESSION['uid']."";

		$result = mysqli_query($conn, $q);

 		while($row = mysqli_fetch_assoc($result)) {

 			$_SESSION['uid'] =  $row["uid"];
    		echo "uid: " . $row["uid"]. " <br/>Username: " . $row["username"];
            echo "<br/> password " . $row["password"]. " <br/>Name:".$row["name"]."<br>";
  			}
		
			echo "<a href='logout.php'>Logout</a>";


    }else
    {
    	echo "Wrong otp<br/><a href='".$_SERVER['HTTP_REFERER']."'/>GO BACK</a>";
    }
}else
{
	header('location:otp.php');
}



?>
