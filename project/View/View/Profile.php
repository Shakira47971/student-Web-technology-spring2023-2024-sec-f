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
<a id="b4" href="home.php">home</a>
        
    </fieldset>
    <div class="container">
    <div class="E1">
                        <ul>
                       
                            <li><a  href="Profile.php">Profile</a></li>
                            <li><a  href="profilePicture.php">Profile Pic</a></li>
                            <li><a  href="editProfile.php">Edit Profile</a></li>
                            <li> <a  href="ChangePassword.php">Password</a></li>
                        </ul>
                        </div>
                        <div class="content">
  <div class="profile-container">
    <?php foreach ($name as $profile) { ?>
      <div class="profile-item">
        <div class="profile-info">
          <h2><?php echo $profile['name']; ?></h2>
          <p>Email: <?php echo $profile['email']; ?></p>
          <p>Gender: <?php echo $profile['gender']; ?></p>
          <p>Date of Birth: <?php echo $profile['dd']; ?>/<?php echo $profile['mm']; ?>/<?php echo $profile['yyyy']; ?></p>
        </div>
        <div class="profile-pic">
          <img src="<?php echo $profile['proPic']; ?>" alt="<?php echo $profile['name']; ?>'s Profile Picture" width="200" height="150">
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</body>
</html>

    