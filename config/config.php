
<?php
    $con = new mysqli("localhost","root","","apartment_sales");
    
    if ($con->connect_error)
    {
             die("Connection failed: " . $con->connect_error);
    }

    //$con = mysqli_connect("localhost","root","","apartment_sales");

?>    