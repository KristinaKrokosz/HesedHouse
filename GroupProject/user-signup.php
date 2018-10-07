<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="user-signup.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Login Setup</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title"></h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form action="act-signup.php"  method="post" class="form-horizontal">

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
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
                  <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
                <div class="login-register">
                        <a href=".php">Login</a>
                     </div>

                     <tr style="text-align:center">
                     <td colspan="2">
                     <?php
                         if(isset($GET['msg']))
                         {
                           $message = $_GET['msg'];
                             if($message ==1)
                               echo "<span style='color green'> Your entry has been succesfully entered!!</span>";
                         }
                     ?>
                   </td>
                   </tr>
				</div>
			</div>
		</div>
</form>
		<script type="text/javascript" src="/js/bootstrap.js"></script>
	</body>
</html>
