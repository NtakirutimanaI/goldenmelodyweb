<!DOCTYPE html>
<html>
<head>
    <?php include "header.php" ?>
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="styleregform.css">
</head>
<body>
<div id="login-box">
	<div class="left-box">
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
    $sql="INSERT INTO registration(username,email,password) values('$username','$email','$password')";
    if($conn->query($sql)){

        echo "new record inserted successfully";
    }
    else{
        echo "Error:" .$sql. "<br>".$conn->error;
    }
    $dbcon->close();
     }
    } 
  }
}
?>
  <form  id="vform" action="form_handler.php" method="post" onsubmit="return validate()" name="vform">
        <h1>Sign Up</h1>
        <div>
         <input type="text" name="username" size="32" placeholder="Username">
         <div id="name_error" class="val_error"></div>
         </div>
         <div>
         <input type="text" name="email" placeholder="Email">
         <div id="email_error" class="val_error"></div>
         </div>
          <div>
         <input type="password" name="password" placeholder="Password">
         </div>
          <div>
         <input type="password" name="password_confirmation" placeholder="Re-type Password">
         <div id="password_error" class="val_error"></div>
         </div>
         <div>
         <input type="submit" name="signup-button" class="btn" value="Sign Up">
         </div>
         </form>
	</div>
     <div class="right-box">
     	<span class="signinwith">Sign in with<br/>Social Network
     	</span>
    <button class="social facebook">Login with Facebook</button>
    <button class="social twitter">Login with Twitter</button>
    <button class="social google">Login with Google+</button>
     </div>
     <div class="or">OR</div>
</div>
<?php include "footer.php" ?>
</body>
</html>
<!---Java script--->
<script type="text/javascript">
    //Getting all textin puts objects
    var username=document.forms["vform"]["username"];
    var email=document.forms["vform"]["email"];
    var password=document.forms["vform"]["password"];
    var password_confirmation=document.forms["vform"]["password_confirmation"];
    //GETTING ALL ERRORS
    var name_error=document.getElementById("name_error");
    var email_error=document.getElementById("email_error");
    var password_error=document.getElementById("password_error");
    //Setting all event listeners
    username.addEventListener("blur",nameVerify,true);
    email.addEventListener("blur",emailVerify,true);
    password.addEventListener("blur",passwordVerify,true);

    //varidation functions
    function varidate(){
    // username varidation
    var form = document.getElementById('frm')
    if(username.value==""){
        username.style.border="1px solid red";
        name_error.textContent="Username is required!";
        username.focus();
        return false;
    }
    //email varidation
    if(email.value==""){
        email.style.border="1px solid red";
        email_error.textContent="Email is required!";
        email.focus();
        return false;
    }
    //email varidation
    if(password.value==""){
        password.style.border="1px solid red";
        password_error.textContent="Password is required!";
        password.focus();
        return false;
    }
}
//Event handler functions
function nameVerify(){
    if(username.value !="")
    {
     username.style.border="1px solid #5e6e66";
        username_error.innerHTML=" ";  
        return true; 
    }
}
function emailVerify(){
    if(email.value !="")
    {
     email.style.border="1px solid #5e6e66";
        email_error.innerHTML=" ";  
        return true; 
    } 
}
function passwordVerify(){
    if(password.value !="")
    {
     password.style.border="1px solid #5e6e66";
     password_error.innerHTML=" ";  
        return true; 
    }
}
</script>