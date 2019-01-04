
<?php 
//connect to Data base
$db=mysqli_connect("localhost","root","authentication");

if(isset($_POST['register_btn'])){
	session_start();
	$username=mysqli_real_escape_string($_POST['username']);
	$email=mysqli_real_escape_string($_POST['email']);
	$password=mysqli_real_escape_string($_POST['password']);
	$password2=mysqli_real_escape_string($_POST['password2']);
     
     if($password==$password2){
     	//ccreate user
      
      $password=md5($password);//security
      $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
      mysqli_queli($db,$sql);
      $_SESSION['message']="You are now logged in!";
      $_SESSION['username']=$username;
      header("location:home.php")//redirect to home page
     }
     else{
     	$_SESSION['message']="The two passwords do not match!";

     }
}

?>