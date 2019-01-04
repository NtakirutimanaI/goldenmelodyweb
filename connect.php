<?php 
$username=filter_input(INPUT_POST,'username');
$username=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');

if(!empty($username))
{
if(!empty($email))
{
if(!empty($password))
{
$host="localhost";
$dbusername="root";
$dbemail="";
$dbpassword="";
$dbname="goldendatabase";

//create connection

$conn=new mysqli($host,$dbusername,$email,$dbpassword,$dbname);

if(mysqli_connect_error()){

    die('connect Error()'.mysql_connect_error());
}
else{
    $sql=INSERT INTO registration(username,email,password);
    if($conn->query($sql)){

        echo "new record inserted successfully";
    }
    else{
        echo "Error:" .$sql. "<br>".$conn->error;
    }
    $dbcon->close();
}
}
?>