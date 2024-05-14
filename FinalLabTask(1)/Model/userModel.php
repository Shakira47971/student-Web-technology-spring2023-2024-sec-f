<?php 
   require_once('BookingCustomerDb.php');

    
    
    function addProduct($pdt){
        $con = dbConnection();
        $sql = "insert into product values('', '{$pdt['Name']}', '{$pdt['Quantity']}', '{$pdt['Price']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAllProduct(){
        $con = dbConnection();
        $sql = "select * from product";
        $result = mysqli_query($con, $sql);
        $products = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($products, $row);
        }

        return $products;
    }

    function deleteProduct($id){
        $con = dbConnection();
        $sql = "delete from product where pID = '$id'";       
        $result = mysqli_query($con, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateProduct($id, $pname, $quantity, $price){
        $con = dbConnection();
        $sql = "update product set Name = '$pname', Quantity = '$quantity', Price = '$price' where pID = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function getProduct($id) {
        $con = dbConnection();
        $sql = "select * FROM product WHERE pID = '$id'";
        $result = mysqli_query($con, $sql);
        $details = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($details, $row);
        }
        return $details;
    }

?>