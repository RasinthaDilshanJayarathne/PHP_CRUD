<?php

include "connect.php";
$con = new mysqli("127.0.0.1:3307", "root", "", "crud");


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM crud WHERE id=$id";

    $result = mysqli_query($con,$sql);
    if ($result){
        //echo "Deleted successful";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>
