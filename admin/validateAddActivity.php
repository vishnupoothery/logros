<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $allowedExts = array("pdf");
    $temp = explode(".", $_FILES["pdf_file"]["name"]);
    $extension = end($temp);
    $upload_pdf=mktime().$_FILES["pdf_file"]["name"];
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/" .mktime(). $_FILES["pdf_file"]["name"]);
    $sql = "INSERT INTO activity (username,title,description,certificate,date) VALUES (:username,:title,:description,:certificate,:date)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':date', $_POST['date']);
    $stmt->bindParam(':certificate', $upload_pdf);
    if( $stmt->execute() ):
        $message = 'Registration Sucess. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addActivity.php?username=".$_POST['username']."&message=$message");
?>