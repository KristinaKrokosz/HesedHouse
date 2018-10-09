<?php
  $con = mysqli_connect("local", "root", "Lakers24", "hesed_house")
          or die("Failed to connect to mysql server." .mysqli_connect_error());

          if($_POST'userid'] == $_POST'confirm_userid']){
            if ($_POST'password'] == $_POST'confirm_password']){

                $user_name = mysqli_real_escape_string($con, $_POST[]'name']);
                $email = mysqli_real_escape_string($con, $_POST[]'email']);
                $user_password = mysqli_real_escape_string($con, $_POST[]'user_password']);
                $confirm_password = mysqli_real_escape_string($con, $_POST[]'confirm_password']);
                $userid = mysqli_real_escape_string($con, $_POST[]'userid']);
                $confirm_userid = mysqli_real_escape_string($con, $_POST[]'confirm_userid']);

  $query = "INSERT INTO login_accounts(user_name, emailaddress, user_password, userid)
   VALUES('$user_name', '$email', '$user_password', '$userid')";

   if(!mysqli_query($con, $query))
    {
      echo "".mysqli_error($con);
    }
    else
    {
      header("Location: user-signup.php?msg=1")
    }

?>
