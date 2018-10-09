<link rel="stylesheet" href="user-signup.css">
<!------ Include the above in your HEAD tag ---------->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>

		<title>Signup</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">



        <div class="panel-heading">
	         <div class="panel-title text-center">
	            <h1 class="title"></h1>
	         </div>
	      </div>


        <div class="main-login main-center">


          <form action="act-signup.php"  method="post">
              <?php include('errors.php'); ?>

              <div class="form-group">
							         <label for="name" class="cols-sm-2 control-label">Your Name</label>

                       <div class="cols-sm-10">
								           <div class="input-group">
											 			 <input type="text" class="form-control" name="user_name" id="user_name"  placeholder="Enter your Name"/>
								           </div>
							         </div>
						  </div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="user_password" id="user_password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="$confirm_password" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

                 <div class="form-group">
     							<label for="userid" class="cols-sm-2 control-label">User ID</label>
     							<div class="cols-sm-10">
     								<div class="input-group">
     									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
     									<input type="text" class="form-control" name="userid" id="userid"  placeholder="Enter your User ID"/>
     								</div>
     							</div>
     						</div>

                <div class="form-group">
    							<label for="confirm_userid" class="cols-sm-2 control-label">Comfirm User ID</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="confirm_userid" id="confirm_userid"  placeholder="Confirm your User ID"/>
    								</div>
    							</div>
    						</div>


                <div class="form-group ">
                  <button type="button" name="register"  class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>

				</div>
			</div>
		</div>
</form>
	</body>
</html>
