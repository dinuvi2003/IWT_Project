<?php
   require '../../config/config.php';
   
    if(isset($_POST['btnDel']))
    {
        echo $_GET['apartmentId'];
        $sqlD = "DELETE FROM apartment WHERE apartment_ID = 'apartmentID'";
        $resultD = $con -> query($sqlD);

        if($resultD)
            {
                echo "<script>";
                echo "alert('Deleted successfully')";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error!')";
                echo "</script>";
            }
    }
?>