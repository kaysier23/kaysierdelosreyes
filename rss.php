<?php
    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820410") or die (mysqli_error($con));
    $sql = "SELECT * FROM tblprofile";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rss .= '<izone>';
        $rss .= '<Stage_Name>' . $Stage_Name . '</Stage_Name>';
        $rss .= '<Rank>' . $Rank . '</Rank>';
        $rss .= '<Birth_Name>' . $Birth_Name . '</Birth_Name>';
        $rss .= '<Birthday>' . $Birthday . '</Birthday>';
        $rssf.= '<Position>' . $Position . '</Position>';
        $rss .= '</izone>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>
