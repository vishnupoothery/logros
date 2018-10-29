<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $sql = "INSERT INTO user (username,fname,sname,sex,phone,email,dob,department,type) VALUES (:username,:fname,:sname,:sex,:phone,:email,:dob,:department,:type)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':fname', $_POST['fname']);
    $stmt->bindParam(':sname', $_POST['sname']);
    $stmt->bindParam(':sex', $_POST['sex']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':dob', $_POST['dob']);
    $stmt->bindParam(':department', $_POST['department']);
    $stmt->bindParam(':type', $_POST['type']);
    if( $stmt->execute() ):
        $message = 'Registration Sucess. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addFaculty.php?message=$message");
?>