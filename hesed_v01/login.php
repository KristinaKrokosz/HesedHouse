<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hesed House: Login</title>
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
        <div class="loginBox">
        
        <form method="post" action="login.php" class="lg">
          
          <img src="hesed_house.jpg" alt="Hesed House">

          <div class="form-group">
            <label for="username"></label>
              <input type="text" name="username" class= "form-control" placeholder="User Name" required>
          </div>

          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>

              <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          <p>Do not have an account? <a href="register.php">Sign up</a>
            </p>
          </form>
      </div>


      <?php

        if(isset($_POST["login"])){
    			$username=$_POST['username'];
   				$password=$_POST['password'];
   				//$db = mysqli_connect('localhost', 'root', '', 'hesed_house');
   				$connects =mysqli_connect('localhost', 'root', '', 'hesed_house');

   			if($connects){  					  	
          			$query= ("SELECT * FROM employees WHERE name = '$username' AND password = '$password'");
          			$result = mysqli_query($connects, $query);
                $count = mysqli_num_rows($result);

                if (!$result) {
                  die(mysqli_error($connects)); 
                      }
            			
            			if($count==1){
                			header("Location: searchpage.html"); /* Redirect browser */                      
							        exit();
		           		}	
                  else{
                    echo "error";
                  }
   				
   				if (!$connects) {
   					die('Connection Error: ' . mysqli_connect_errno());
   				}
   			}
  		}

?>

</body>
</html>