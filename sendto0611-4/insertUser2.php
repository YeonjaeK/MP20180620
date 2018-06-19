<?php

    $conn = mysqli_connect('localhost', 'root', 'root', 'Swumuck');

    $ownerid = ($_POST['id']);
    $password = ($_POST['password']);
    $password = md5($password);
 
    $sql= "insert into ShopInfo (shopid, shoppw) values ('$ownerid','$password')";

    if (mysqli_query($conn, $sql)) {
        echo ' Insert Done!! ';
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);

?>
