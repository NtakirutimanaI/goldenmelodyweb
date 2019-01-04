<?php
$host='localhost';
$dbusername='root';
$dbpassword='';
$dbname='goldendatabase';
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error) die($conn->connect_error);
?>