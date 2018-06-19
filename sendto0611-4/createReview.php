<?php

    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'student', 'root', 'W01iphone');
    $conn = mysqli_connect('localhost', 'root', 'root', 'Swumuck');
    //$conn = mysqli_connect('condi.swu.ac.kr', 'root', 'root', 'Swumuck');
    
    $reviewid = ($_POST['reviewid']);
    $reviewshop = ($_POST['reviewshop']);
    $reviewmenu = ($_POST['reviewmenu']);
    $reviewtime = ($_POST['reviewtime']);
    $reviewcontent = ($_POST['reviewcontent']);
    
    $sql= "insert into Review (reviewid, reviewshop, reviewmenu, reviewtime, reviewcontent) values ('$reviewid', '$reviewshop', '$reviewmenu', '$reviewtime', '$reviewcontent')";

    if (mysqli_query($conn, $sql)) {
        echo ' 리뷰를 저장하였습니다! ';
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);

?>
