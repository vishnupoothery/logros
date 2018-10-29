<?php
    require 'checkLogin.php';
    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($_GET['message'])): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $_GET['message'] ?>
        </div>
    <?php endif; ?>
    <form action="validateAddStudent.php" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Roll Number" id="username" class="form-control">
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
                <input type="text" name="programme" placeholder="Programme Name" id="programme" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="year" placeholder="Year of Graduation" id="year" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="cgpa" placeholder="CGPA" id="cgpa" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Mobile Number" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email ID" id="email" class="form-control">
            </div>
            <input type="hidden" name="type" value="0"> <!-- 0 for student 1 for faculty-->
            <div class="">
                <input type="submit" name="submit" value="Add Student">
            </div>
    </form>
</body>
</html>