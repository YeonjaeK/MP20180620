<?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'Swumuck');

    $ownerid = ($_POST['id']);
    $sql = "select shopid, shoppw from Swumuck.ShopInfo where shopid = '$ownerid' limit 1";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_row($result)) {
            $dbOwnerid = $row[0];
            $dbPassword = $row[1];
       
            $password = ($_POST['password']);
            $password = md5($password);
            if($ownerid == $dbOwnerid && $password == $dbPassword) {
                echo json_encode(array("success"=>"YES"));
            }
            else {
                echo json_encode(array("success"=>"NO", "error"=>"Password is invalid"));
            }
        }
    } else {
        echo json_encode(array("success"=>"NO", "error"=>"ID not exist"));
    }

    mysqli_close($conn);
?>
