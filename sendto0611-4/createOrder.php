<?php

    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'student', 'root', 'W01iphone');
    $conn = mysqli_connect('localhost', 'root', 'root', 'Swumuck');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'root', 'Swumuck');
    
    //$conn = mysqli_connect('localhost', 'student', 'student1234', 'W01iphone');
    
    $ordernumber = ($_POST['no']);
    $userid = ($_POST['id']);
    $ordershop = ($_POST['shop']);
    $ordermenu = ($_POST['menu']);
    $ordertime = ($_POST['time']);
    $orderrequest = ($_POST['request']);
    //$orderchecked = ($_POST['orderchecked']);
    //$orderrejected = ($_POST['orderrejected']);
    //$orderprepared = ($_POST['orderprepared']);
    
    //$sql= "insert into OrderMenu (ordernumber, orderid, ordershopname, ordermenuname, ordertime, orderrequest) values ('$userid', '$ordershop', '$ordermenu', '$ordertime', '$orderrequest')";
    
    $sql= "insert into OrderMenu (ordernumber, orderid, ordershopname, ordermenuname, ordertime, orderrequest) values ('$ordernumber', '$userid', '$ordershop', '$ordermenu', '$ordertime', '$orderrequest')";

    if (mysqli_query($conn, $sql)) {
        echo ' 주문이 완료되었습니다! ';
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);

?>
