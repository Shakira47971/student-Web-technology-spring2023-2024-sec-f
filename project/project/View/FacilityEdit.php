<?php
 session_start();
 $facility = $_SESSION['facility'];
 if(!isset($_COOKIE['flag'])){
     header('location: login.php');
 }
 require_once('../Model/facilityadmin.php');
 
 $facilityId = isset($_REQUEST['facilityId']) ? $_REQUEST['facilityId'] : ''; 
     
   $FacilityEdit=facilityEdit($facilityId);
   


   

    
    
 
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
    <a id="b4" href="FacilityView.php">Back</a>
</fieldset>
   
    <form method="post" action="../Controller/FacilityEditCheck.php">
        
            <body id="b8">

            <?php for($i=0; $i<count($FacilityEdit); $i++){?>  
        <table align ="center" class="c1">

<tr class="c1">
  <td>Facility Id:</td>
  <td><input type="number"  name="facilityId" value="<?php echo $FacilityEdit[$i]['facilityId']; ?>"/></td>
</tr>
<tr class="c1">
  <td>Facility Name:</td>
  
  <td>
  <div style="padding: 3px;">
      <input type="text"  name="facilityName" value="<?php echo $FacilityEdit[$i]['facilityName']; ?>"/>
        </div>
  </td>
</tr>
<tr class="c1">
  <td>Facility Description:</td>
  <td>
  <div style="padding: 3px;">
      <textarea id="facilityDescription" name="facilityDescription" rows="4" cols="50" ><?php echo  $FacilityEdit[$i]['facilityDescription'] ; ?> </textarea>
  </div>
  </td>
</tr>
<tr class="c1">
  <td>Facility Catagory:</td>
  <td>
  <div style="padding: 3px;">
      <select  name="facilityCatagory">
      <option value="Accommodation" <?php if ($FacilityEdit[$i]['facilityCatagory'] == 'Accommodation') echo 'selected="selected"'; ?>>Accommodation</option>
                <option value="Recreation"  <?php if ($FacilityEdit[$i]['facilityCatagory'] == 'Recreation') echo 'selected="selected"'; ?>>Recreation</option>
                <option value="Dining" <?php if ($FacilityEdit[$i]['facilityCatagory'] == 'Dinning') echo 'selected="selected"'; ?>>Dining</option>
                <option value="Business"  <?php if ($FacilityEdit[$i]['facilityCatagory'] == 'Buisness') echo 'selected="selected"'; ?>>Business</option>
                <option value="Others"  <?php if ($FacilityEdit[$i]['facilityCatagory'] == 'Others') echo 'selected="selected"'; ?>>Others</option>
          
      </select>
    </div>
  </td>
</tr>


            
                       
<tr class="c1">
<td colspan="2" style="text-align: center;">
                
                    <div style="padding: 15px;" >
                        <button type="submit" id="b7" name="update" value="update">Update</button>
                        </div>
</td>
</tr>
</table>
                       
                    
<?php } ?>

                

    </form>

</body>
</head>
</html>