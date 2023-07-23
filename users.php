<?php

include 'dbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <h1>All users page</h1>

    <button><a href="adduser.php">Add user</a></button>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action update</th>
                <th>Action Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'select * from users';
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    echo '
                        <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td><button><a href="update.php?updateId='.$id.'">Update</a></button></td>
                        <td><button><a href="delete.php?deleteId='.$id.'">Delete</a></button></td>
                    </tr>
                        ';
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>