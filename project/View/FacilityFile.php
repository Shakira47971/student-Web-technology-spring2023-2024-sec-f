<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/facilityadmin.php');
?>
<html>
<head>
    <title>HTML form</title>
    <link rel="stylesheet" href="../Asset/Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Asset/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    
 <a id="b4" href="FacilityAdmin.php">Back</a>
    
</fieldset>




        <form method="post" action="../Controller/FacilityFileCheck.php" enctype="multipart/form-data">
        <table border=1  cellspacing=0 align="center" >
        <tr   >
                        <td>Facility ID:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="facilityId" id="facilityId" />
                            </div>
                        </td>
        </tr> 
                   
                        <tr  >
           
                       
                        
           <td> <div style="padding: 3px;">  <input type="file" name="myfile" accept="image/*" value="" /> <br></td>
          
                 <td>   <input type="submit" name="submit" value="Upload" /> </td>
        </tr>
             
                 </table>
                

        </form>
       

</body>
</html>
   