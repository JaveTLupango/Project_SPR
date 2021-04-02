
<!-- <!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>

<div>
					
					<div>
		<nav>
			<div >
				<?php include('admin-registration-navbar-view.php');?>							
			</div>

		</nav>

</div>		
				
<div>
	  			</div>

			<div>
					
				<p>Register Here</p>		 				
					<form method="post" action="admin-registration-process.php">
						<table>
							<tr>
							<td>Firstname:</td>
							<td><input type="text" name="firstname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Middlename:</td>
							<td><input type="text" name="middlename"></td>
							<td></td>
							</tr>
							<tr>
							<td>Lastname:</td>
							<td><input type="text" name="lastname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Gender:</td>
							<td><input type="text" name="gender"></td>
							<td></td>
							</tr>
							<tr>
							<td>Address:</td>
							<td><input type="text" name="address"></td>
							<td></td>
							</tr>
							<tr>
							<td>BirthDate:</td>
							<td>
								Month: <input type="text" name="birthmonth">
								Day: <input type="text" name="birthday">
								Year: <input type="text" name="birthyear">
							</td>
							<td></td>
							</tr>
							<tr>
							<td>Mobile Number:</td>
							<td><input type="text" name="mobilenumber"></td>
							<td></td>
							</tr>
							<tr>
							<td>Email:</td><td><input type="email" name="email"></td>
							<td></td>
							</tr>
							<tr>
								<td>Password: </td>
								<td><input type="password" name="password"></td>
								<td></td>
							</tr>
						<tr><td>
					</table>
					<br> <center><input type="submit" value="Submit"name="submit">
						<button ><a href="admin-login-view.php">Go to Login</a></button></center>

				</form>
			</div>
			
			</center>

</div>

</body>
</html> -->


<!doctype html>
<html lang="en">
<head>
<title>Admin Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<?php include('logo-title.php');?>
</head>
<body style="background-image: url(bg1.jpg); height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <section class="ftco-section">
        <div class="container">
      
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);">
                          <img  src="data:image/jpeg;base64,<?php echo base64_encode($image)  ?>" style="max-width: 200px;"/>
                        </div>
                        <h3 class="text-center mb-0">Admin Registration</h3>
                        <p class="text-center">Sign Up by entering the information below</p>
                        <form action="admin-registration-process.php" class="login-form">
							<div class="rows">
								<div class="form-group col-lg-5">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                                </div>
							</div>
							<div class="rows">
								<div class="form-group col-lg-5">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
                                </div>
							</div>
								  
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                                  </div>
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="gender" placeholder="Gender" required>
                                  </div>
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="date" class="form-control" name="birthday" placeholder="BirthDate" required>
                                  </div>
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="email" placeholder="Email" required>
                                  </div>
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="text" class="form-control" name="mobilenumber" placeholder="mobilenumber" required>
                                  </div>
								  <div class="form-group">
                                  	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  	<input type="email" class="form-control" name="email" placeholder="Email" required>
                                  </div>
								  
                                  <div class="form-group">
                                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                                  </div>
                                  <!-- <div class="form-group d-md-flex">
                                    <div class="w-100 text-md-right">
                                    <a href="#">Forgot Password</a>
                                    </div>
                                  </div> -->
                            <div class="form-group">
                            <button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>
                        <div class="w-100 text-center mt-4 text">
                        <p class="mb-0">Don't have an account?</p>
                        <a href="admin-registration-view.php">Sign Up</a>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-19/js/jquery.min.js"></script>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-19/js/popper.js"></script>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-19/js/bootstrap.min.js"></script>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-19/js/main.js"></script>
</body>
</html>

