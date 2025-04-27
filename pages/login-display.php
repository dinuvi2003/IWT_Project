<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require '../config/config.php';

    global $con;

    if(isset($_POST['btnSubmit']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
    
      $sqlR = "SELECT * FROM users WHERE user_mail = '$username' AND user_password = '$password'";
      $result = $con->query($sqlR);
    
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          header('location:./home.php');
          // echo "<div class='display-block'>";
          // echo "User ID - " . $row['user_ID'] . "<br>";
          // echo "Name -  " . $row['user_first_name'] . " " . $row['user_last_name'] . "<br>";
          // echo "Account type - " . $row['user_account_type'] . "<br>";
          // echo "</div>";
        }
      }
      else
      {
          echo "<script>";
          echo "alert('Invalid user login!')";
          echo "</script>";
      }
    }

    $con->close();
  ?>

</body>
</html>


    
</body>
</html>