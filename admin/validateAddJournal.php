<?php

session_start();

require 'config.php';

if(!empty($_POST['submit'])):
    $sql = "INSERT INTO journal (username,title,description,year,issn,publisher,website) VALUES (:username,:title,:description,:year,:issn,:publisher,:website)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':year', $_POST['year']);
    $stmt->bindParam(':issn', $_POST['issn']);
    $stmt->bindParam(':publisher', $_POST['publisher']);
    $stmt->bindParam(':website', $_POST['website']);
    if( $stmt->execute() ):
        $message = 'Registration Sucess. Thank You for registering';
    else:
        $message = 'Sorry there must have been an issue registering';
    endif;
endif;
header("Location: addJournal.php?username=".$_POST['username']."&message=$message");
?>