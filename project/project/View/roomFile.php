<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

?>
<html>
<head>
    <title>HTML form</title>
</head>
<body style="text-align: center;">
<h3><U> Room Picture</U></h3>


        <form method="post" action="../Controller/roomFileCheck.php" enctype="multipart/form-data">
        <table border=1  cellspacing=0 align="center">
            <tr>
           <td> img:</td>
           <td> <div style="padding: 3px;">  <input type="file" name="myfile" value="" /> <br></td>
          
                 <td>   <input type="submit" name="submit" value="Upload" /> </td>
                 </table>
                 <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomAdmin.php">Back</a>

        </form>
       

</body>
</html>
   