<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles.css">


  <tr>
    <td>
  <title>Admin Login</title>
    <td>
  </tr>

</head>
     
     <style type="text/css">
         fieldset
         {border-bottom: none;
          border-left: none;
          border-right: none;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "montserrat",sans-serif;
         }
       </style>
<body>
<center>

<form action="admin-login-process.php" method="post">
        <table style="text-align:center;">
          <tr>
          <tr>
          <label>Admin Login</label>


                           <tr>
                           <td> 
                            Email
                           <input type="text" name="email">
                           </td>
                                    
                                  </tr></tr>

                           <tr>
                           <td>
                            Password
                           <input type="password" name="password">
                           </td>
          
                                    <td>
                                    </td>
                                    </tr>
                                    <tr>
                                      <td>
                                    Don't have an acount!
                                  <p align="right"><a href="admin-registration-view.php">Sign up</a></p>
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
</center>
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
<body>
    <section class="ftco-section">
        <div class="container">
      
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);">
                          <img  src="data:image/jpeg;base64,<?php echo base64_encode($image)  ?>" style="max-width: 200px;"/>
                        </div>
                        <h3 class="text-center mb-0">Admin Login</h3>
                        <p class="text-center" style="color: black;">Sign in by entering the information below</p>
                        <form action="admin-login-process.php" class="login-form">
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
                        <p class="mb-0" style="color: black;">Don't have an account?</p>
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
