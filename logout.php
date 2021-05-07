<?php
session_start();
session_destroy();

//echo $_SERVER['HTTP_REFERER'];
header('location:'.$_SERVER['HTTP_REFERER']);
?>