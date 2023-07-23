<?php

include 'dbConnection.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $sql = "delete from `users` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: users.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>