<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin dashboared</title>
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
            <h3>Admin<span>page</span></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>

    <div class="sidebar">
        <center>
            <img src="images/8.png" class="profile_image" alt="">
            <h4>Admin</h4>
        </center>
        <a href="admin_customers.php"><i class="fas fa-desktop"></i><span> Customers</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Vendors</span></a>
        <a href="pending_reg.php"><i class="fas fa-table"></i><span>Pending Registrations</span></a>
        <a href="#"><i class="fas fa-comments"></i><span>Chat</span></a>
        <a href="#"><i class="fas fa-comment-dots"></i><span>Feedbacks</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <div class="content"></div>


</body>

</html>

</html>