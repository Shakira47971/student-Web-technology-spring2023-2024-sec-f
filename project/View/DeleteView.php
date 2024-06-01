<?php
require_once('../Model/guestdb.php');

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$name=$_REQUEST['username'];
?>
<html>
    <head>
        <title>Delete View</title>
        <link rel="stylesheet" href="../Assets/Admin.css"/>
    </head>
<body id="b8">
        <fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click & Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <a id="b11" href="GuestAdmin.php">Back</a>
</fieldset>

                        <table align="center" class="c1">     
                           
                
                <tr>
                <td>Username </td>    <td> :<input type="text" name="username" value="<?php echo $name ?>"></td>  
</tr>
</tr>
               <tr><td> <input type="submit" id="b7" name="Submit" value="Delete"/></td></tr>
</fieldset>
               </form>

</table>
           
               
</body>
</html>