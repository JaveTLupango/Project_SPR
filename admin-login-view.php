<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <?php include('logo-title.php');?>

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
</html>