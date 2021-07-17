<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Vendor dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>"
        </label>
        <div class="left_area">
            <h3>Vendor<span>dashboard</span></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>

    <div class="sidebar">
        <center>
            <img src="images/8.png" class="profile_image" alt="">
            <h4><?php echo $_SESSION["email"]; ?></h4>
        </center>
        <a href="add_services.php"><i class="far fa-plus-square"></i><span> Add Services</span></a>
        <a href="#"><i class="far fa-calendar-times"></i><span>Bookings</span></a>
        <a href="#"><i class="fas fa-comment-dots"></i><span>Customer Feedbacks</span></a>
        <a href="#"><i class="fas fa-file-invoice-dollar"></i><span>Payments</span></a>
        <a href="#"><i class="fas fa-tasks"></i><span>Progress</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a>
    </div>
    <div class="content"></div>


</body>

</html>

</html>