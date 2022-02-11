<?php

include('dbconfig.php');
session_start();

if (isset($_POST['sendmessage'])) {
    $userName = $_POST['name'];
    $userMessage = $_POST['message'];
    $userEmail = $_POST['email'];

    $insertUser = "INSERT INTO contact(con_user, con_email, con_message)  
    VALUES (?,?,?)";
    $insertQuery = $conn->prepare($insertUser);
    $insertQuery->execute(array($userName,$userEmail,$userMessage));

    if ($insertQuery) {
        $_SESSION['success_msg'] = "Email Sent Successfull. One Of our admin will contact you soon.";
         header('location: ../contact-us.php');
    }else{
        $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
         header('location: ../contact-us.php');
    }

}