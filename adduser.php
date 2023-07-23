<?php

include 'dbConnection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "insert into `users` (name,email) 
    values ('$name','$email')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: users.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add users</title>
</head>
<body>
    
    <h1>Add user page</h1>

    <form method="post">
    <label for="name">Name</label>
    <input type="text" name='name' placeholder="Enter your name">

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Enter your email">

    <button type="submit" name='submit'>Submit</button>

    </form>

</body>
</html>