<?php

    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'student', 'root', 'W01iphone');
    // $conn = mysqli_connect('http://condi.swu.ac.kr', 'root', 'student', 'root', 'W01iphone');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'root', 'W01iphone');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'admin', 'root', 'W01iphone');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'root', 'root', 'W01iphone');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'home', 'root', 'Condi', 'root', 'student', 'root', 'W01iphone');
    
    $conn = mysqli_connect('localhost', 'root', 'root', 'Swumuck');
    //$conn = mysqli_connect('localhost', 'student', 'student1234', 'Swumuck');
    
    $userid = ($_POST['id']);
    $password = ($_POST['password']);
    $password = md5($password);
    $name = ($_POST['name']);
    $ordernumber = ($_POST['orderno']);
    $coupon = ($_POST['coupon']);

    $sql= "insert into StudentInfo (studentid, studentpw, nickname, ordernumber, coupon) values ('$userid','$password','$name', '$ordernumber', '$coupon')";

    
    if (mysqli_query($conn, $sql)) {
        echo ' 슈먹슈먹 가입을 환영합니다 ';
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);

?>
