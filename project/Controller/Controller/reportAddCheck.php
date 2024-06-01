<?php

require_once('../Model/report.php');

function CheckDescription($Report) {
    if ($Report == "") {
        echo " Report cannot be empty ";
        return false;
    }
    elseif (strlen($Report) < 5 || strlen($Report) > 200) {
        echo "Report must be 5 to 199 characters long";
        return false;
    } else {
        
            return true;
        }
    }

    if (isset($_POST['report'])) {
        $Report= $_POST['report'];
        $User= $_POST['username'];
        
        if ( CheckDescription($Report) ) {
           
                $user = [
                    'username' => $User,
                    'report' => $Report,
                    
                    
                ];
                $status = Add($user);

                if ($status) {
                    header('Location: ../View/reportView.php');
                    exit();
                } else {
                    echo "Database error! Unable to add transport.";
                }
            } else {
                echo "Error uploading file.";
            }
    }

?>
