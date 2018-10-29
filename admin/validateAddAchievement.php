<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $allowedExts = array("pdf");
    $temp = explode(".", $_FILES["pdf_file"]["name"]);
    $extension = end($temp);
    $upload_pdf=mktime().$_FILES["pdf_file"]["name"];
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/" .mktime(). $_FILES["pdf_file"]["name"]);
    $sql = "INSERT INTO achievement (username,title,description,proof,year) VALUES (:username,:title,:description,:proof,:year)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':proof', $upload_pdf);
    $stmt->bindParam(':year', $_POST['year']);
    if( $stmt->execute() ):
        $message = 'Registration Sucess. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addAchievement.php?username=".$_POST['username']."&message=$message");
?>