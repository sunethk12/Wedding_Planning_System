


<!DOCTYPE html>

<html lang="en">

<head>
    <title></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="nav.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body class="home">

    <!--Navbar-->

    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="images/laksiri.jpg" width="200px" height="70px"
                    class="d-inline-block align-top" alt="" loading="lazy"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Vendors</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Planning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">Contact Us</a>
                    </li>
                    <?php   
                 if(isset($_SESSION["email"])){
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Dash Board</a>
                    </li>
                    <?php    
                }
                    ?>


                </ul>

                <ul class="navbar-nav ml-auto">
                <?php   
                 if(isset($_SESSION["email"])){
                    ?>  <button class="btn" onclick="window.location='logout.php'">Logout</button>   
                <?php    
                }else{
                    ?>
                     <button class="btn" onclick="window.location='login.php'">Login</button> 
<?php
                    }
     ?>              
                    
                </ul>
            </div>
        </nav>
    </header>

















</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>