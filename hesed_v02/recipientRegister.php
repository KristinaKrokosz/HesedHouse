<!DOCTYPE html>
<html>
<head>
  <title>Register Reciepent</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register Reciepent</h2>
  </div>
  
  <form method="post" action="upload.php">

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="first_name" >
    </div>

    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="last_name">
    </div>
    
    <div class="input-group">
      <label>Date of Birth</label>
      <input type="text" name="dob">
    </div>
    
    <div class="input-group">
      <label>User ID</label>
      <input type="password" name="userid">
    </div>
    
    <div class="input-group">
      <label>Confirm User ID</label>
      <input type="password" name="userid2">
    </div>
    
    <div class="input-group">
      <button type="submit" class="btn" name="reg_recip">Register</button>
    </div>
  </form>

    <form method="post" action="upload.php" enctype="multipart/form-data">

      <div class="input-group">
        <input type="file" name="file"></td></tr>

        <button type="submit" class="btn" name="upload_btn">Upload File</button>
      </div>
    </form>   
  
  </form>
</body>
</html>