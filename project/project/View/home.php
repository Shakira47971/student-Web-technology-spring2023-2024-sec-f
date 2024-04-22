<?php

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

?>
<html>
    <head>
        <title>Home</title>
    </head>
<body>
<table border="1" cellspacing="0" width="550">
        <tr>
            <td colspan=2><table><tr><td width="414">Click & Stay</td><td align=right>  Logged in as<a style="color:rgb(0, 102, 255); " href="Maruf Hossain">Maruf</a>
</td></tr></table></td>
        </tr>

        <tr  style="height:200;">
            <td align="Left" style="width:200">
        <b>Account</b><hr>
 
                    <span align="left">
                        <ul>
                            <li><a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="BookingAdmin.php">Booking Customer</a></li>
                            
                        </ul>
</span>
     
                </td><td align=top><span align=top><b>Welcome </b></td>
                </tr>
                <tr>
                    <td colspan=2 align=center>Copyright © 2017
</td>
</tr>
            </table>
               
</body>
</html>