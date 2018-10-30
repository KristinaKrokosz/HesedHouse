<?php 
session_start();

$errors = array(); 

$conn = mysqli_connect('localhost', 'root', '', 'hesed_house');

// register recipient
if (isset($_POST['reg_recip'])) {
  // receive all input values from the form
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$userid = mysqli_real_escape_string($conn, $_POST['userid']);
	$userid2 = mysqli_real_escape_string($conn, $_POST['userid2']);


// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { array_push($errors, "First Name is required"); }
	if (empty($last_name)) { array_push($errors, "Last name is required"); }
	if (empty($userid)) { array_push($errors, "User ID is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same id
	$user_check_query = "SELECT * FROM recipients WHERE id='$userid' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
  	if ($user['id'] === $userid) {
  		array_push($errors, "User ID already exists");
  	}
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO recipients (id, first_name, last_name, dob) 
  	VALUES('$userid', '$first_name', '$last_name', '$dob')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: adminpage.html');
  }
}


// upload cvs
if (isset($_POST['upload_btn'])) {	
		$filename=$_FILES['file']['name'];		
		 if($_FILES['file']['size'] > 0)
		 {
		  	$file = fopen($filename, 'r');
	        while (($getData = fgetcsv($file, 10, ",")) !== FALSE)
	         {
	           $sql = "INSERT INTO rec_test (first_name, last_name, dob) 
					values('".$getData[0]."', '".$getData[1]."', '".$getData[2]."')";
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