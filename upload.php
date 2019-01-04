<html>
  <head>
    <title>Upload an image</title>
  </head>
  <?php include "header.php" ?>
<body>
	<h3 align="center">Upload an Image</h3>
  <form action="ourimages.php" method="post" enctype="multipart/form-data" align="center">
    <b>Select image to upload:</b>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include "footer.php" ?>
  </body>
</html>

  