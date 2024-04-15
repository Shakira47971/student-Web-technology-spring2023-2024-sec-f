
<html>
<head>
    
    <title>Booking Management</title>
</head>
<body style ="text-align: center;">
   
   
     <h3><u>Log in</u></h3>
     <form method="post" action="../Controller/LoginCheck.php" enctype="">
     
        <table align="center" cellspacing="0">
            <tr>
                <td>Username:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="username" >
                    </div>
                </td>
            </tr> 
            <tr>
                <td>Password:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="password"name="password" >
                    </div>
                </td>
            </tr> 
            <tr><td colspan=2><hr></td></tr>
<tr><td colspan=2><input type="CheckBox" name="CheckBox" value="">Remember Me</td></tr>
<tr><td colspan=2><input type="submit" name="Submit" value="Submit"/>
                 
          <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="ForgotPassword.php">Forgot Password</a>
          <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="Registration.php">Registration</a>
          </td>
        </table>
</form>
        <body>
</html>

