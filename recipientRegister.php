<!DOCTYPE html>
<html>
<head>
  <title>Register Reciepent</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="global.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
			h2{
				background-color:#3377ff;
				padding:20px;
				border-radius: 10px;
			}
		</style>
</head>
<body>
<div class="loginBox" >

<form method="post" action="upload.php" class="lg">
<div>
<h2 >Register Recipient</h2>
</div>
 
<div class="form-group">
  <label> First Name</label>
  <input type="text" name="first_name" class= "form-control" placeholder="First Name" required >
</div>

<div class="form-group">
  <label>Last Name</label>
  <input type="text" name="last_name" class="form-control"  placeholder="Last Name" required>
</div>
<div class="form-group">
  <label>Date of Birth</label>
  <input type="text" name="dob" class="form-control"  placeholder="Date of Birth" required>
</div>
<div class="form-group">
  <label>User ID </label>
  <input type="password" name="userid" class="form-control"  placeholder="User ID " required>
</div>
<div class="form-group">
  <label>Confirm User ID </label>
  <input type="password" name="userid2" class="form-control"  placeholder="Confirm User ID " required>
</div>

<button type="submit" name="reg_recip" class="btn btn-primary btn-block">Register</button>
<form method="post" action="upload.php" enctype="multipart/form-data">

<div class="input-group">
  <input type="file" name="file"></td></tr>

  <button type="submit" class="btn" name="upload_btn">Upload File</button>
</div>
</form>   


</form>
</div>
 
</body>
</html>