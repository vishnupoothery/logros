<?php
    require 'checkLogin.php';
    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Degree for <?php echo $_GET['username'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($_GET['message'])): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $_GET['message'] ?>
        </div>
    <?php endif; ?>
    <form action="validateAddDegree.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="major" placeholder="Enter Major" id="major" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="degree" placeholder="Enter Degree" id="degree" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="year" placeholder="Enter Year" id="year" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="institute" placeholder="Enter institute" id="institute" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="cgpa" placeholder="Enter cgpa" id="cgpa" class="form-control">
            </div>
            <input type="hidden" name="username" value="<?php echo $_GET['username'] ?>">
            <div class="">
                <input type="submit" name="submit" value="Add Degree">
            </div>
    </form>
</body>
</html>