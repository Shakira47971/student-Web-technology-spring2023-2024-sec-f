<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$GuestId = isset($_REQUEST['guestd']) ? $_REQUEST['guestId'] : '';
?>

<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">
    
<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
     <a id="b4"  href="CustomerView.php">Back</a>
               
             
</fieldset>
        <form method="post" action="../Controller/CustomerDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" class="c4">
              
                    <tr class="c3">
                        <td>Guest Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="guestId" value="<?= $GuestId ?>"/>
                            </div>
                        </td>
                       
                      </tr>
                        <tr class="c3">
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;">
                            <button type="submit"id="b7" name="delete" value="delete">Delete</button>
                             </div>
                        </td>
                    </tr> 
                </table> 
                
        </form>
    </div>
</body>
</html>
