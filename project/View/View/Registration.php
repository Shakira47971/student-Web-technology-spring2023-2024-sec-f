
<html>
<head>
  <title>Registration</title>
</head>
<body style ="text-align: center;">

    
          
   
        <form method="post" action="../Controller/RegCheck.php" enctype="">
        <h3><u>Registration</u></h3>
 
        <table border="1" cellspacing="0" align="center" width="550">
           
              <tr>
                <td align="left">Name</td>
                <td>
                  <span style="padding: 3px;">
                    :<input type="text" name="name" value="">
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">Email</td>
                <td>
                  <span style="padding: 3px;">
                    :<input type="email" name="email" value="">
                  </span>
                </td>
                
               
                <td>
            <div style="padding: 4px;">
              <a style="color:rgb(0, 102, 255); margin-top: 10px; padding:10px;" href="CustomerFile.php">Picture</a>
            </div>
          </td>
          
</tr>
<td>Enter valid email</td>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">User Name</td>
                <td>
                  <span style="padding: 3px;">
                    :<input type="text" name="username" value="">
                  </span>
                </td>
              </tr>
              <td>Enter unique username</td>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">Password</td>
                <td>
                  <span style="padding: 3px;">
                    :<input type="password" name="password" value="">
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">Confirm Password</td>
                <td>
                  <span style="padding: 3px;">
                    :<input type="password" name="cpassword" value="">
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">Gender</td>
                <td>
                  <input type="radio" name="gender" value="Male" /> Male
                  <input type="radio" name="gender" value="Female" /> Female
                  <input type="radio" name="gender" value="Other" /> Other
                </td>
              </tr>
              <td>must select gender</td>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td align="left">Date Of Birth</td>
                <td>
                  <div style="padding: 4px;">
                    <input type="text" size="2px" name="dd" value=""><b> /</b>
                    <input type="text" size="2px" name="mm" value=""><b> /</b>
                    <input type="text" size="2px" name="yyyy" value="">
                    <i>(dd/mm/yyyy)</i>
                  </div>
                </td>
              </tr>
              <tr>
              <td>Enter valid date of birth</td>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" name="Submit" value="Submit" />
                  <input type="reset" name="reset" value="Reset" />
                </td>
              </tr>
            </table>
           
            
          
          </body>
</form>
</body>
</html>
