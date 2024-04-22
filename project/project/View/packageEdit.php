<?php
 session_start();
 $package = $_SESSION['package'];
 if(!isset($_COOKIE['flag'])){
     header('location: login.php');
 }
 
 require_once('../Model/packageadmin.php');
 $packageId = isset($_REQUEST['packageId']) ? $_REQUEST['packageId'] : '';
    
     
   $PackageEdit=packageEdit($packageId);
   

    
 
?>
 
<html>
<head>
    <title>Edit Room</title>
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
    <a id="b4" href="PackageView.php">Back</a>  
</fieldset>

    <form method="post" action="../Controller/PackageEditCheck.php">
    <?php for($i=0; $i<count($PackageEdit); $i++){?>  
    <table align="center" class="c1" >
    

<tr class="c1">
  <td>Package Id:</td>
  <td><input type="Name" id="packageId" name="packageId" value="<?php echo $PackageEdit[$i]['packageId']; ?>"/></td>
</tr>
<tr class="c1">
  <td>Package Name:</td>
  
  <td>
  <div style="padding: 3px;">
      <input type="text" id="packageName" name="packageName" value="<?php echo $PackageEdit[$i]['packageName']; ?>"/>
        </div>
  </td>
</tr>
<tr class="c1">
    <td>Package Description:</td>
    <td>
        <div style="padding: 3px;">
            <textarea id="packageDescription" name="packageDescription" rows="4" cols="50"><?php echo  $PackageEdit[$i]['packageDescription'] ; ?></textarea>
        </div>
    </td>
</tr>

<tr class="c1">
  <td>Package Category:</td>
  <td>
  <div style="padding: 3px;">
      <select id="packageCatagory" name="packageCatagory">
          <option value="Single package" <?php if ($PackageEdit[$i]['packageCatagory'] == 'Single package') echo 'selected="selected"'; ?>>Single package</option>
          <option value="Couple package"<?php if ($PackageEdit[$i]['packageCatagory'] == 'Couple package') echo 'selected="selected"'; ?>>Couple package</option>
          <option value="Family package" <?php if ($PackageEdit[$i]['packageCatagory'] == 'Family package') echo 'selected="selected"'; ?>>Family package</option>
          <option value="Accommodation Packages" <?php if ($PackageEdit[$i]['packageCatagory'] == 'Accomodation packages') echo 'selected="selected"'; ?>>Accommodation Packages</option>
          <option value="Activity Packages"<?php if ($PackageEdit[$i]['packageCatagory'] == 'Activity packages') echo 'selected="selected"'; ?>>Activity Packages</option>
          <option value="Special Occasion Packages"<?php if ($PackageEdit[$i]['packageCatagory'] == 'Special Occasion packages') echo 'selected="selected"'; ?>>Special Occasion Packages</option>
          <option value="Seasonal Packages" <?php if ($PackageEdit[$i]['packageCatagory'] == 'Sessional packages') echo 'selected="selected"'; ?>>Seasonal Packages</option>
          <option value="Business Packages"<?php if ($PackageEdit[$i]['packageCatagory'] == ' Buisness packages') echo 'selected="selected"'; ?>>Business Packages</option>
          <option value="Exclusive Packages" <?php if ($PackageEdit[$i]['packageCatagory'] == 'Exclusive packages') echo 'selected="selected"'; ?>>Exclusive Packages</option>
          <option value="Customizable Packages"<?php if ($PackageEdit[$i]['packageCatagory'] == 'Customizabla packages') echo 'selected="selected"'; ?>>Customizable Packages</option>
      </select>
    </div>
  </td>
</tr>
<tr class="c1">
  <td>Price:</td>
  <td>
  <div style="padding: 3px;">
      <input type="number" id="packagePrice" name="packagePrice" value="<?php echo $PackageEdit[$i]['packagePrice']; ?>"/>
     </div>
  </td>
</tr>

<tr class="c1">
                <td colspan="2" style="text-align: center;">
                    <div style="padding: 15px;">
                        <button type="submit"id="b7" name="update" value="update">Update</button>
                        </div>
                </td>
            </tr>

                        </table>
                        
                        
                   
            <?php } ?>

           
        
    </form>

</body>
</head>
</html>