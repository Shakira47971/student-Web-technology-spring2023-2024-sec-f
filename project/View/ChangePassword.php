<?php
session_start(); 
require_once('../Model/guestdb.php');
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$user = $_SESSION['username'];

$name=name($user);

?>
<html>
    <head>
        <title>Change Password</title>
        <title>Profile</title>
        <link rel="stylesheet" href="../Assets/customerStyle.css"/>
    </head>
<body class="b1">
<fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
        <h3 id="b1"><u>Click & Stay</u></h3>
        
        <h4 id="b10">Find your next stay</h4>
        <?php for($i=0; $i<count($name); $i++){?>

<p id="b11" ><?php echo $name[$i]['name']; ?></p>
<?php } ?>
<a id="b4" href="Profile.php">Back</a>
        
    </fieldset>
    <?php for($i=0; $i<count($name); $i++){?>
               
                <form method="post" action="../Controller/ChangepassCheck.php" enctype="">
                  
                        <table align="center" class="c1">
                        <p align="center"></p>
                            <tr>
                       <td align=left> Current Password </td>   <td align=right> :<input type="password" id="currentPassword" name="cpassword" value="" onkeyup="validatePassword()"/></td>
</tr>
<tr>
                       <td align=left> New Password </td>   <td align=right> :<input type="password" id="newPassword" name="npassword" value="" onkeyup="validatePassword()"/></td>
</tr>
<tr>
                       <td align=left> Re-Type Password </td>   <td align=right> :<input type="password" id="confirmPassword" name="rpassword" value="" onkeyup="validatePassword()"/></td>
</tr><tr><td>
                        <input type="submit" id="b7" name="btn" value="update"/></td></tr>
</table>
                       
                  
</form>
</td>
                </tr>
                <tr>
                 
</td>
</tr>
<?php } ?>
                </table>
                <script>
    function validatePassword() {
      let obj = document.getElementsByTagName('p')[1];
      obj.innerHTML = "";
      obj.style.color = '';

      let newPassword = document.getElementById('newPassword').value;
      let confirmPassword = document.getElementById('confirmPassword').value;
      let currentPassword = document.getElementById('currentPassword').value;
      if (newPassword === "" || confirmPassword === "" || currentPassword === "") {
        obj.innerHTML = "Password field is empty";
        obj.style.color = 'red';
        return false;
      }
      if (newPassword !== confirmPassword) {
        obj.innerHTML = "Password doesn't match with your new password";
        obj.style.color = 'red';
        return false;
      }
      if (newPassword.length < 8) {
        obj.innerHTML = "Password must be at least 8 characters long";
        obj.style.color = 'red';
        return false;
      }
      let validChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_@#*";
        let hasValidChar = true;

        for (let i = 0; i <newPassword.length; i++) {
          let char = passwordnewPassword[i];
          if (validChars.indexOf(char) === -1) {
            hasValidChar = false;
            obj.innerHTML = "Password can only contain letters, numbers, and underscores";
            obj.style.color = 'red';
            return false;
            break;
          }
        }

        if (hasValidChar) {
          obj.innerHTML = "Password Valid";
          obj.style.color = 'green';
          return true;
        } else {
          obj.innerHTML = "Invalid Password";
          obj.style.color = 'red';
          return false;
        }
      }
  </script>
</body>
</html>
