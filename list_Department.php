<!DOCTYPE html>
<html>
<head>
	<title>List of Leaders</title>
</head>
<?php include "Headofall.php" ?>
<body bgcolor="white">
<table width="60%">
	<tr><th>No</th><th>First name</th><th>Last name</th><th>Position</th>
<th>School</th><th>Level</th><th>Phone</th><th>Email</th></tr>
<?php 
include 'database.php';
$sql="SELECT * FROM department_table";
$query=mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);
if ($num  >0) {
	while ($row=mysqli_fetch_assoc($query)) {
		$fname=$row['fname'];
		$lname=$row['lname'];
		$position=$row['position'];
		$school=$row['school'];
		$level=$row['level'];
		$phone=$row['phone'];
		$email=$row['email'];
		$idno=$row['idno'];

	?>

<tr><td><?php echo $idno; ?></td><td><?php echo $fname; ?></td><td><?php echo $lname; ?></td><td><?php echo $position; ?></td>
<td><?php echo $school; ?></td><td><?php echo $level; ?></td><td><?php echo $phone; ?></td><td><?php echo $email; ?></td></tr>


<?php



}
}


?></table>
<?php include "footer.php" ?>