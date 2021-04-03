<!-- 
<!DOCTYPE html>
<html>
<head>
	<?php //include('logo-title.php');?>
	<title></title>
</head>
<body>

<form action="customer-login-process.php" method="post">
				<table>
					<tr>
						<td> Email</td>
						<td><input type="text" name="cemail"></td>
					<td></td>
					</tr>
				
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="cpassword">
						</td>
					
					<td>
					</td>

				</tr>
					<tr>
							<td>
								Don't have an acount!
								<p align="right"><a href="customer-registration-view.php">Sign up</a></p>
							</td>
							<td>
  							     <input type="submit" name="submit" value="LOGIN"/>
							</td>	
					</tr>	
			</br>

				</table>
					</div>
			</form>
</body>
</html> -->


<!doctype html>
<html lang="en">
<head>
<title>Customer Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<?php include('logo-title.php');?>
</head>
<body style="background-image: url(bg2.jpg); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <section class="ftco-section">
        <div class="container">      
            <div class="row">
              <div class="col-md-6 col-lg-8">
              </div>
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center">
                          <img  src="<?php echo($image)  ?>" style="max-width: 200px;"/>
                        </div>
                        <h3 class="text-center mb-0">Customer Login</h3>
                        <p class="text-center" style="color: black;">Sign in by entering the information below</p>
                        <form action="customer-login-process.php" method="POST" class="login-form">
                            <div class="form-group">
                                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  <input type="email" class="form-control" name="cemail" placeholder="Email" required>
                                  </div>
                                  <div class="form-group">
                                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                  <input type="password" name="cpassword" class="form-control" placeholder="Password" required>
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
                        <p class="mb-0" style="color: black;">Don't have an account?</p>
                        <a href="customer-registration-view.php">Sign Up</a>
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
