<?php  
	if(isset($_POST["submit"])){	
		$filename=$_FILES["file"]["name"];		
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           $sql = "INSERT into student(name,roll) 
					values('".$getData[0]."','".$getData[1]."')";
                   $result = mysqli_query($conn,$sql);
				if(!isset($result))
				{
				echo "<script type=\"text/javascript\">
						alert(\"Invalid File:Please Upload CSV File.\");
						window.location = \"index.php\"
					  </script>";		
				}
				else {
				  echo "<script type=\"text/javascript\">
					alert(\"CSV File has been successfully Imported.\");
					window.location = \"index.php\"
				</script>";
				}
	         }
	         fclose($file);	
		 }
	}	 
?>
<html lang="en">
<head>
  <title>TechJunkGigs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
	background-color:#F0F4C3;
  }
</style>
  </head>
<body>
<div class = "container">
<form method='POST' enctype='multipart/form-data'>
			<label>Upload CSV: </label><input type='file' name='file' /><br>
			<input type='submit' name='submit' value='Upload Details' />
</form>
</div>
</body>
</html>