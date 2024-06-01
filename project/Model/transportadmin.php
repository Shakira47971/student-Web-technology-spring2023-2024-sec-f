<?php
require_once('db.php');

function Add($user) {
    $conn = dbConnection();
    $sql = "INSERT INTO transportadmin  VALUES 
            ('{$user['transportId']}', '{$user['location']}', '{$user['transportType']}', '{$user['capacity']}', '{$user['price']}', '{$user['transportStatus']}', '{$user['proPic']}')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function uniId($transportId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) as count FROM transportadmin WHERE transportId = '$transportId'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return false;
    } else {
        $row = mysqli_fetch_assoc($result);
        return $row['count'] > 0;
    }
}
function viewTransport() {
    $conn = dbConnection();
    $sql = "SELECT * FROM transportadmin ";
    $result = mysqli_query($conn, $sql);
    $transport = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($transport, $row);
    }

    return $transport;
}


function viewAvailableTransport() {
    $conn = dbConnection();
    $sql = "SELECT * FROM transportadmin WHERE transportStatus = 'available'";
    $result = mysqli_query($conn, $sql);
    $transport = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($transport, $row);
    }

    return $transport;
}

function Delete($transportId) {
    $conn = dbConnection();
    $sql = "DELETE FROM transportadmin WHERE transportId='$transportId'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function Edit($transportId, $location, $transportType, $capacity, $price, $target_file) {
    $conn = dbConnection();
    $sql = "UPDATE transportadmin SET location='$location', transportType='$transportType', capacity='$capacity', price='$price', proPic='$target_file' WHERE transportId='$transportId'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function transportEdit($transportId) {
    $conn = dbConnection();
    $sql = "SELECT * FROM transportadmin WHERE transportId='$transportId'";
    $result = mysqli_query($conn, $sql);
    $transport = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($transport, $row);
    }

    return $transport;
}

function bookTransport($transportId, $location) {
    $conn = dbConnection();
    $sql_insert_booking = "INSERT INTO transportadmin (transportId, location) VALUES ('$transportId', '$location')";

    if (mysqli_query($conn, $sql_insert_booking)) {
        $sql_update_transport = "UPDATE transportadmin SET transportStatus = 'booked' WHERE transportId = '$transportId'";
        mysqli_query($conn, $sql_update_transport);
        return true;
    } else {
        return false;
    }
}

function search($capacity, $transportType, $price, $location) {
    $conn = dbConnection();
    $sql = "SELECT * FROM transportadmin 
            WHERE capacity >= '$capacity' 
              AND transportType = '$transportType' 
              AND price <= '$price' 
              AND location LIKE '%$location%'
              AND transportStatus = 'available'";

    $result = mysqli_query($conn, $sql);
    $transport = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($transport, $row);
    }

    return $transport;
}

function getTransport($transportId) {
    $conn = dbConnection();
    $sql = "SELECT * FROM transportadmin WHERE transportId='$transportId'";
    $result = mysqli_query($conn, $sql);
    $transport = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($transport, $row);
    }
    return $transport;
}
?>
