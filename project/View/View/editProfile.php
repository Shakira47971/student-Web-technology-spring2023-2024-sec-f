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
        <title>Edit Profile</title>
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
                <p></p>
                <form method="post" action="../Controller/editProfileCheck.php" enctype="">
                <div  align ="center" class="c1">
                    Name :    <input type="text" id="name" name="name" value="<?php echo $name[$i]['name']; ?>" onkeyup="nameValidate()"><br>
                      
Email:       <input type="email" id="email" name="email" value="<?php echo $name[$i]['email']; ?>" onkeyup="emailValidate()"><br>
  Gender  :
                        <input type="radio" id="male" name="gender" value="Male" <?php if ($name[$i]['gender'] == 'Male') echo 'checked="checked"'; ?> onclick="genderValidate()"/>Male
<input type="radio" name="gender" id="female" value="Female" <?php if ($name[$i]['gender'] == 'Female') echo 'checked="checked"'; ?> onclick="genderValidate()"/>Female
<input type="radio" name="gender" id="other" value="Other" <?php if ($name[$i]['gender'] == 'Other') echo 'checked="checked"'; ?> onclick="genderValidate()"/>Other<br>

                  <div style="padding: 4px;">
                  Date of Birth :
                    <input type="text" size="2px" id="dd" name="dd" value="<?php echo $name[$i]['dd']; ?>" onkeyup="dob()"><b> /</b>
                    <input type="text" size="2px" id="mm" name="mm" value="<?php echo $name[$i]['mm']; ?>" onkeyup="dob()"><b> /</b>
                    <input type="text" size="2px" id="yyyy" name="yyyy" value="<?php echo $name[$i]['yyyy']; ?>" onkeyup="dob()">
                    <i>(dd/mm/yyyy)</i>
                  </div><br>
                
                        <input type="submit" name="Submit"  id="b7" value="Submit"/>
</div>
</form>
                
<?php } ?>
               
  <script src="../Assets/ProfileEdit.js"></script>
</body>
</html>
