<html>
    <head>
        <title>Login</title>
    </head>
<body>
   
        <table border="1" cellspacing="0">
        <tr>
           <td> <b>Company   <span style="padding: 200px;"align=right></b><a style="color:rgb(0, 102, 255); " href="Home.php">Home</a>|
            <a style="color:rgb(0, 102, 255); " href="Login.php">Login</a>| <a style="color:rgb(0, 102, 255);" href="Registration.php">Registration</a>
</span>
        </tr>
        <tr  style="height:200;">
            <td align="center">
            <form method="" action="" enctype="">
        <fieldset style="width: 300;">
           <legend><b>Registration</b></legend>
            <table>
            
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="username" value="" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" value="" /></td>
                        </tr>
                        <tr> 
                            <td>Username</td>
                            <td><input type="text" name="username" value="" /></td> 
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" value="" /></td> 
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td><input type="password" name="confirmPassword" value="" /></td>   
                        </tr>
                        
                        <tr>
                       
           <td>Gender</td>
                            
                            <td>
                                <input type="radio" name="gender" value="male" />Male
                                <input type="radio" name="gender" value="female" />Female
                                <input type="radio" name="gender" value="other" />Other
                            </td>
                        </tr>
                        </fieldset>
                        <tr>
                            <td>Date Of Birth</td>
                            <td>
                                <input type="text" name="day" size="2" maxlength="2"> /
                                <input type="text" name="month" size="2" maxlength="2"> /
                                <input type="text" name="year" size="4" maxlength="4"> (dd/mm/yyyy)
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" name="submit" value="Submit"/>   
                                <input type="reset" name="reset" value="Reset" />
                            </td>
                        </tr>
                    
                    
                        </table>
        </fieldset>
        </form>
            
        <tr>
            <td colspan="3" align="center">Copyright@2017</td>
        </tr>
    </table>

</body>
</html>
