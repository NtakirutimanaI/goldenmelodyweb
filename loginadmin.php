<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM registration WHERE username = '$username' and passcode = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
	<?php include "header.php" ?>
	
</head>
<body>
<form  id="frm" action="blog-home-3.php" method="post" onsubmit="return checkForm(this)" name="loginform">
	<div class="header"><h2 align="center">Administrator Use Only</h2></div>
<div class="input_group">
<label>Username</label>	
<input  type="text" name="username" placeholder="Type your username">
</div>

<div class="input_group">
<label>Password</label>	
<input  type="password" name="password" placeholder="Type your password">
</div>


<div class="input_group">
<button type="submit" name="login " class="btn" align="center">Login</button>

</div>
</form>
<?php include "footer.php" ?>
</body>
</html>

<script type="text/javascript">
        function checkForm(loginform){
 
            //regular expressions to math only alphanumeric and spaces
            var re =/^[\w ]+$/; 

            var form = document.getElementById('frm')  
            
          
                if(form.username.value==""){
                alert("Username field is empty!");
                 return false
                }
                
                if(form.password.value==""){
                alert("Password field is empty!");
                 return false
             }
        
              if(!re.test(form.username.value))
             {
                alert("Input contains invalid characters!");
                return false
                }
             //validation successiful

             return true;
        }
    </script>