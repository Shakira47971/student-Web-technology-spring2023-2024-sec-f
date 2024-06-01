<?php
require_once('../Model/guestdb.php');

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


$name=getAllGuest();


?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="../Assets/Admin.css"/>
    </head>
<body id="b8">
        <fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click & Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <a id="b11" href="Update.php">Update</a>
    <a id="b4" href="AdminHome.php">home</a>
</fieldset>
                        <table align="center" class="c4">
                            <tr class="c3">
                           
                <td>ID</td>
                <td>NAME</td>
                <td>USERNAME</td>
                <td>EMAIL</td>
                <td>PICTURE</td>
                <td>GENDER</td>
                <td>DOB</td>
                <td>Action</td>
            </tr><?php for($i=0; $i<count($name); $i++){?>
                            <tr>
                            <td> <?php echo $name[$i]['gid']; ?></td>  
                            <td> <?php echo $name[$i]['name']; ?></td>  
                            <td> <?php echo $name[$i]['username']; ?></td>  
                            <td> <?php echo $name[$i]['email']; ?></td>  
                            <td> <img src="<?php echo $name[$i]['proPic']?>"width="90" height="60"></td>  
                            <td> <?php echo $name[$i]['gender']; ?></td>  
                            <td> <?php echo $name[$i]['dd']; ?>/<?php echo $name[$i]['mm']; ?>/<?php echo $name[$i]['yyyy']; ?></td>  
                                     <td><b> <a  href="deleteView.php?username=<?=$name[$i]['username']?>">Delete </a> </b></td>
                        </tr>
                        <?php } ?>
        </table>
                        
               
</body>
</html>

    