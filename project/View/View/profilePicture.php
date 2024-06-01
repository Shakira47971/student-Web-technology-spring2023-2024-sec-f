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
        <title>Profile Picture</title>
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
    <table align="center" class="c1">
    <tr>
        <?php for($i=0; $i<count($name); $i++){?>
            <td>
                <div class="profile-item">
                    <div class="profile-info">
                        <p></p>
                        <form action="../Controller/profilePicCheck.php" method="post" enctype="multipart/form-data">
                           <div align="center"> <img src="<?php echo $name[$i]['proPic']?>" width="200" height="150"></div>
                           <div align="center">   <input type="file" id="profilePic" name="profilePic" accept="image/*"></div>
                           <div align="center">    <input type="submit" id="b7" value="upload" onclick="validatePic()"/></div>
                        </form>
                    </div>
                </div>
            </td>
        <?php }?>
    </tr>
</table>
                <script src="../Assets/ProfileEdit.js"></script>
               
</body>
</html>
