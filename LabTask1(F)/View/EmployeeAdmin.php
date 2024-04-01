
<html >
<head>
    
    <title>Staff Management</title>
</head>
<body>
<div style="text-align: center;">
<h3><U>Employee Details</U></h3>
<form method="post" action="../Controller/EmployeeRegCheck.php" enctype="">
        <table align="center" cellspacing="0">
        <tr>
                
            <tr>
                <td> Employee Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="empName">
                        
                    </div>
                    <td> Enter your full name</td>
                </td>
            </tr> 
            <tr>
                <td>User Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="empUser">
                        
                    </div>
                    <td>Enter valid  Username</td>
                </td>
            </tr> 
           
            <tr>
                <td>Contact:</td>    
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="contact">
                    </div>
                </td>
                <td>Enter valid contact</td>
            </tr>
            <tr>
                <td>Passward:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="password">
                        <td>Enter valid password</td>
                    </div>
                </td>
            </tr>
            
               

       
   
    <tr>
        <td colspan="2" style="text-align: center;"><div style="padding: 3px;">    
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="EmployeeView.php">View</a>
               
            <button type="submit">Register</button>
           
           
          
            
              
                
</div>  </td>
    </tr>

</table>

</body>
</html>