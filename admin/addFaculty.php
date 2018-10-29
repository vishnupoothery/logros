<?php
    require 'checkLogin.php';
    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Faculty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($_GET['message'])): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $_GET['message'] ?>
        </div>
    <?php endif; ?>
    <form action="validateAddFaculty.php" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="NITC Email username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="fname" placeholder="First Name" id="fname" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="sname" placeholder="Second Name" id="sname" class="form-control">
            </div>
            <div class="form-group">
                <label for="district">Sex</label>
                <select class="form-control" id="sex" name="sex">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Other</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" name="dob" placeholder="Date of Birth" id="dob" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="department" placeholder="Department Name" id="department" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Mobile Number" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email ID" id="email" class="form-control">
            </div>
            <input type="hidden" name="type" value="1"> <!-- o for student 1 for faculty-->
            <div class="">
                <input type="submit" name="submit" value="Add Faculty">
            </div>
    </form>
</body>
</html>