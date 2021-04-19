<?php

$url = $_GET['p'];

$xml = simplexml_load_string($url) or die('error');

//print_r($xml);
echo $xml->lastName;

?>