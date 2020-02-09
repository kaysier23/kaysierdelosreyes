<?php
    $rssf = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssf .= '<rss version="2.0">';
    $rssf .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820410") or die (mysqli_error($con));
    $sql = "SELECT * FROM tblprofile";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rssf .= '<izone>';
        $rssf .= '<Stage_Name>' . $Stage_Name . '</Stage_Name>';
        $rssf .= '<Rank>' . $Rank . '</Rank>';
        $rssf .= '<Birth_Name>' . $Birth_Name . '</Birth_Name>';
        $rssf .= '<Birthday>' . $Birthday . '</Birthday>';
        $rssf .= '<Position>' . $Position . '</Position>';
        $rssf .= '</music>';
    }
    $rssf .= '</channel>';
    $rssf .= '</rss>';

    echo $rss;
?>
