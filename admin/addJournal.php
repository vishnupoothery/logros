<?php
    require 'checkLogin.php';
    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Journal for <?php echo $_GET['username'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($_GET['message'])): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $_GET['message'] ?>
        </div>
    <?php endif; ?>
    <form action="validateAddJournal.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="title" placeholder="Enter Title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="description" placeholder="Enter Description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="year" placeholder="Enter Year" id="year" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="website" placeholder="Website URL" id="website" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="publisher" placeholder="Publisher name" id="publisher" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="issn" placeholder="ISSN" id="issn" class="form-control">
            </div>
            <input type="hidden" name="username" value="<?php echo $_GET['username'] ?>">
            <div class="">
                <input type="submit" name="submit" value="Add Student">
            </div>
    </form>
</body>
</html> 