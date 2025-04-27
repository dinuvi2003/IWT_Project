<?php

    $agentMail = $_GET['agentMail'];

    if(isset($_POST['submit'])){

        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $message =$_POST['message'];

        $name = $firstName." ".$lastName;
        $sendMessage = "Email : ".$email."Message : ".$message;
        
        $mail = mail($agentMail, $fileName,$sendMessage);

        if($mail){
            echo "<script>alert('Thank you for contact me. I will contact you as well as possible')</script>";
        }

    }