<?php

$method = $_SERVER['REQUEST_METHOD'];
$response = array();
switch($method)
{
	case "GET":
		response(doGet());
		break;
	case "POST":
		doPost();
}

function doGet()
{

 if(@$_GET['id'])
 {
 	@$id = $_GET['id'];

 }	
 $conn = mysqli_connect("localhost","root","","project");
 //$q = "select * from users where username='$username' and password='$password' ";
 $q= "select * from users where uid='$id' ";
 $result = mysqli_query($conn, $q);
 while($row = mysqli_fetch_assoc($result))
 {
  $response[] = array("uid"=>$row['uid'],"Name"=>$row['name']);
  }
  return $response;
}

function doPost()
{
if($_POST)
 {
 	@$id = $_GET['id'];

 	 $conn = mysqli_connect("localhost","root","","project");
	 $q= "select * from users where uid='$id' ";
 	$result = mysqli_query($conn, $q);
 	while($row = mysqli_fetch_assoc($result))
 	{
  	$response[] = array("uid"=>$row['uid'],"Name"=>$row['name']);
  	}
  	return $response;
 }	


}

function response($response)
{
 echo json_encode(array("status"=>"200","data"=>$response));
}


?>