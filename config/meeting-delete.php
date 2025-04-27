<?php
    include_once './db.php';

    $meeting_id = $_GET['meetingId'];

    $query = "DELETE FROM meeting WHERE meeting_id = '$meeting_id'";
    $result = mysqli_query($conn, $query);

    if($result){
        header('location:../pages/seller/meetings.php');
        echo "<script> alert('Successfully removed') </script>";
    }
    else{
        echo "<script> alert('Something went wrong') </script>";
    }