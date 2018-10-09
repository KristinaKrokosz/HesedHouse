<?php


$user_name = "";
$email    = "";
$errors = array();
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "password";
$dbName = "accounts";

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if (isset($_POST['register'])) {
  $user_name = mysqli_real_escape_string($con, $_POST[]'name']);
  $email = mysqli_real_escape_string($con, $_POST[]'email']);
  $user_password = mysqli_real_escape_string($con, $_POST[]'user_password']);
  $confirm_password = mysqli_real_escape_string($con, $_POST[]'confirm_password']);
  $userid = mysqli_real_escape_string($con, $_POST[]'userid']);
  $confirm_userid = mysqli_real_escape_string($con, $_POST[]'confirm_userid']);

  if (empty($username)) { array_push($errors, "Username is required"); }
   if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($user_password)) { array_push($errors, "Password is required"); }
   if ($user_password != $confirm_password) {
 	array_push($errors, "The two passwords do not match");
   }

   // first check the database to make sure
   // a user does not already exist with the same username and/or email
   $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
   $result = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);

   if ($user) { // if user exists
     if ($user['username'] === $username) {
       array_push($errors, "Username already exists");
     }

     if ($user['email'] === $email) {
       array_push($errors, "email already exists");
     }
   }

   if (count($errors) == 0) {
   $password = md5($user_password)

  $query = "INSERT INTO login_accounts(user_name, emailaddress, user_password, userid)
   VALUES('$user_name', '$email', '$password', '$userid')";
}
}
