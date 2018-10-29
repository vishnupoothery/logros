<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $sql = "INSERT INTO degree (username,major,degree,institute,year,cgpa) VALUES (:username,:major,:degree,:institute,:year,:cgpa)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':major', $_POST['major']);
    $stmt->bindParam(':degree', $_POST['degree']);
    $stmt->bindParam(':institute', $_POST['institute']);
    $stmt->bindParam(':year', $_POST['year']);
    $stmt->bindParam(':cgpa', $_POST['cgpa']);
    if( $stmt->execute() ):
        $message = 'Registration Sucess. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addDegree.php?username=".$_POST['username']."&message=$message");
?>