<?php
require_once('../Model/login.php');

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$dd = $_REQUEST['dd'];
$mm = $_REQUEST['mm'];
$yyyy = $_REQUEST['yyyy'];

function namecheck($name) {
    if ($name == "") {
        echo "Name cannot be empty";
       
    } else {
        $words = explode(" ", $name);

        if (count($words) > 2) {
            echo "Name must contain at least two words";
            
        } 
        return true;
    }
}

function username($username) {
    if ($username == "") {
        echo "Username cannot be empty";
       
    } else {
        $verify = uniuser($username);
        if ($verify) {
            echo "This username is already taken. Please choose a different username";
           
        }
    }
    return true;
}

function emailcheck($email) {
    if ($email == "") {
        echo "Email Address Cannot be Empty";
    } else {
        $verify=uniemail($email);
    if($verify){
        echo"this email already taken. Please choose a different email";
    }
        $isValid = true;
        $atPos = strpos($email, "@");
    
        if ($atPos === false || $atPos === 0 || $atPos === strlen($email) - 1) {
            $isValid = false;
            echo "Email must contain '@' symbol not at the beginning or end.";
        } 
        if ($isValid) {
            return true;
        }
    }
}


function passcheck($password, $cpassword) {
    if ($password == "" || $cpassword == "") {
        echo "Password field is empty";
       
    } else {
        if ($password != $cpassword) {
            echo "Password doesn't match with your confirm password";
           
        }

        if (strlen($password) < 8) {
            echo "Password must be at least 8 characters long";
           
        }

        $validChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];
            if (strpos($validChars, $char) === false) {
                echo "Password can only contain letters, numbers, and underscores";
               
            }
        }
    }
    return true;
}

function gendercheck($gender) {
    if ($gender) {
        return true;
    } else {
        echo "Please select a gender.";
       
    }
}
function DOBCheck($dd,$mm,$yyyy){
    if (empty($dd) || empty($mm) || empty($yyyy)) {
        echo "Date is invalid: Please fill in all fields.";
      } else {
        if (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
          echo "Date is invalid: Please enter numbers for day, month, and year.";
        } else {
          $dd = intval($dd);
          $mm = intval($mm);
          $yyyy = intval($yyyy);
      
          if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 2005) {
            echo "Date is invalid: Values are outside the allowed ranges.";
          } else {
            $maxDays = 31;
            if ($mm == 4 || $mm == 6 || $mm == 9 || $mm == 11) {
              $maxDays = 30;
            } else if ($mm == 2) {
              $maxDays = 28;
              if ($yyyy % 4 == 0 && ($yyyy % 100 != 0 || $yyyy % 400 == 0)) {
                $maxDays = 29;
              }
            }
      
            if ($dd > $maxDays) {
              echo "Date is invalid: Day is not valid for the selected month.";
            } else {
             return true;
            }
          }
        }
      }
    }

      if(namecheck($name)&& username($username) && emailcheck($email)&& passcheck($password,$cpassword)&&DOBCheck($dd,$mm,$yyyy)&& gendercheck($gender)){
        $guest = ['name'=>$name,'email'=>$email,'gender'=>$gender,'username'=> $username, 'password'=>$password,'dd'=>$dd ,'mm'=>$mm,'yyyy'=>$yyyy];
        $status = createGuest($guest);
        if($status){
            
            header('location: ../View/login.php');
        }else{
            echo "DB error! Please try again";
        }
    
    
    }
?>
