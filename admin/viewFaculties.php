<?php
    require 'checkLogin.php';
    require 'config.php';
    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    foreach($conn->query('SELECT id,username,fname,sname FROM user WHERE type=1') as $row){
        echo '<div class=""><a href="#"><h3>'.$row['fname'].' '.$row['sname'].'</h3></a></a><a href="addAchievement.php?username='.$row['username'].'">Add Achievement<a><a href="addJournal.php?username='.$row['username'].'">Add Journal<a><a href="addActivity.php?username='.$row['username'].'">Add Activity<a><a href="addDegree.php?username='.$row['username'].'">Add Degree<a></div>';
    }
    ?>
</body>
</html>