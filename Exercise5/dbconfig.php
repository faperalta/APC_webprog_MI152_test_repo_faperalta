<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "dbtuts";
$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link, $datbase);

//mysql_connect($host,$user,$password);
//mysql_select_db($datbase);
?>