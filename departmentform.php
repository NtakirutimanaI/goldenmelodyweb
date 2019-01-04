<?php 
include 'database.php';

?>
<?php
if (isset($_POST['submit'])) {
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $position=$_POST['Position'];
  $department=$_POST['Department'];
  $level=$_POST['Level'];
  $phone=$_POST['Phone'];
  $email=$_POST['email'];
  $sql="INSERT INTO department_table(fname,lname,position,school,level,phone, email) VALUES ('$fname','$lname','$position','$department','$level','$phone','$email')";
  $query=mysqli_query($conn,$sql);
  if ($query) {
    echo "<script>
    alert('submitted successfully');
    </script>";
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
<link rel="stylesheet" type="text/css" href="stylee.css ">
</head>
<?php include "Headofall.php" ?>
<body bgcolor="grey"><hr>
<table id="list"><tr><td>
   <form action="departmentform.php" method="post">
  First name:<br>
  <input type="text" name="firstname" placeholder="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname" placeholder="lastname">
  <br><br>
  Position:<br>
  <input type="text" name="Position" placeholder="Position">
  <br>
  Department:<br>
  <input type="text" name="Department" placeholder="Department">
  <br>
  Level:<br>
  <input type="text" name="Level" placeholder="Level">
  <br>
  Phone:<br>
  <input type="number" name="Phone" placeholder="Phone">
  <br>
  Email:<br>
  <input type="text" name="email" placeholder="email">
  <br>
  <input  type="submit" value="Submit" name="submit">
</form>
</td></tr></table><hr>

<?php include "footer.php" ?>
</body>
</html>
