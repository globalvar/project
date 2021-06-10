<?php
 
if(isset($_GET['p']))
{ 

$a = $_GET['p'];
$xml=simplexml_load_file($a);

echo $xml->firstName;
}


?>