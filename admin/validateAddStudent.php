<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $sql = "INSERT INTO user (username,fname,sname,sex,phone,email,dob,department,type,programme,year,cgpa) VALUES (:username,:fname,:sname,:sex,:phone,:email,:dob,:department,:type,:programme,:year,:cgpa)";
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
    $stmt->bindParam(':programme', $_POST['programme']);
    $stmt->bindParam(':year', $_POST['year']);
    $stmt->bindParam(':cgpa', $_POST['cgpa']);
    if( $stmt->execute() ):
        $message = 'Registration Success. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addStudent.php?message=$message");
?>