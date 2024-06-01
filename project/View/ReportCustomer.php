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

$name=name($user);?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="../Assets/customerStyle.css"/>
    </head>
<body class="b1">

<fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
        <h3 id="b1"><u>Click & Stay</u></h3>
        
        <h4 id="b10">Find your next stay</h4>
        <?php for($i=0; $i<count($name); $i++){?>

<a id="b4" href="<?php echo $name[$i]['name']; ?>"><?php echo $name[$i]['name']; ?></a>
<?php } ?>
        
    </fieldset>
    <h3></h3>
    <form method="post" action="../Controller/reportAddCheck.php" enctype="multipart/form-data">
          
    <div align="center">
   
            <td>User Name:</td>
            <td><input type="text" name="username" id="username" onkeyup="validateUser()"></td>
        </div>
        <div align="center">
      
            <textarea name="report" id="report" placeholder="Write your report here..." rows="4" cols="50" onkeyup="validatereport()"></textarea>
           
        </div>
        <div align="center">
        <button id="b7">Submit Report</button>
        </div>
<script>
     function validateUser() {
    let user = document.getElementById('username').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (user=== "") {
        obj.innerHTML = "user cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (user.length < 5 || report.length > 20) {
        obj.innerHTML = "user Name must be 5 to 19 characters long";
        obj.style.color = 'red';
        return false;
    }
    else {
        obj.innerHTML = "Valid User Name";
        obj.style.color = 'black';
        return true;
    }

}
    function validatereport() {
    let report = document.getElementById('report').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (report === "") {
        obj.innerHTML = "report cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (report.length < 5 || report.length > 200) {
        obj.innerHTML = "report must be 5 to 199 characters long";
        obj.style.color = 'red';
        return false;
    }
    else {
        obj.innerHTML = "Valid report";
        obj.style.color = 'black';
        return true;
    }

}
</script>
        </body>
        </html>