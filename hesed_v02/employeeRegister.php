<!DOCTYPE html>
<html>
<head>
  <title>Registration Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="global.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      h2{
        background-color:#3377ff;
        padding:20px;
        border-radius: 10px;
      }
        .lg{
        padding-top: 10px;
      }
    </style>
</head>
<body>

<div class="loginBox" >

  <form method="post" action="employee_reg_act.php" class="lg">
  <div>
  <h2 >Employee Registration</h2>
</div>
   <!--<?php include('errors.php'); ?> -->

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="username" class= "form-control" value ="Name"placeholder="username" required >
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value='Email' placeholder="email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password_1" class="form-control"  placeholder="Password" required>
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="password_2" class="form-control"  placeholder="Confirmed Password" required>
  </div>

  <button type="submit" name="reg_user" class="btn btn-primary btn-block">Register</button>
  
  
</form>
</div>

 
 
</body>
</html>