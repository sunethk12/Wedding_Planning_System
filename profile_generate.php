<?php
include("model.php");
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>

<body class="bg">


  <div class="container">
<?php

  if(isset($_GET["reg_id"])){

  $reg_id=$_GET["reg_id"];

  $res= mysqli_query($obj->connect(),"select business_reg.b_title, business_reg.logo, business_reg.location,services.img1,services.img2,services.img3,services.package1,services.package2,services.price1,services.price2 from business_reg,services where business_reg.reg_number=services.b_regno and services.b_regno='$reg_id' ");
  
  while($row=mysqli_fetch_array($res)){
      
  ?>











    <!-- starting container -->
    <h2 class="pt-4">VENDOR DETAILS</h2>
    <div class="card">

      <div class="card-body">
        <div class="row">
          <div class="col-8">


            <h4 class="card-title" style="color:#FB550C;"><?php echo $row["b_title"]; ?></h4>
            <p class="card-text"></p>
            <h4 class="card-title"><?php echo $row["location"]; ?></h4>
            <p class="card-text"></p>
          </div>


          <div class="col-4">
            <img class="card-img-bottom" src="<?php echo $row["logo"]; ?>" alt="logo">
          </div>
        </div>

      </div>

    </div>
  </div>



  <div class="container">
    <h5 class="pt-4">Previous Events</h5>

    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="images/b.jpg" target="_blank">
            <img src="<?php echo $row["img1"]; ?>" alt="Lights" style="width:100%">

          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="images/b.jpg" target="_blank">
            <img src="<?php echo $row["img2"]; ?>" alt="Nature" style="width:100%">

          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="images/b.jpg" target="_blank">
            <img src="<?php echo $row["img3"]; ?>" alt="Fjords" style="width:100%">

          </a>
        </div>
      </div>
    </div>
  </div>








  <div class="container">
    <h5 class="pt-4">Package 01</h5>
    <div class="card">
      <div class="card-body">
      <p class="card-text"><?php echo $row["package1"]; ?></p>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <h5 class="pt-4">Price</h5>
    <div class="card">
      <div class="card-body">
      <p class="card-text"><?php echo $row["price1"]; ?></p>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <h5 class="pt-4">Package 02</h5>
    <div class="card">
      <div class="card-body"><p class="card-text"><?php echo $row["package2"]; ?></p></div>
    </div>
  </div>
  </div>

  <div class="container">
    <h5 class="pt-4">Price</h5>
    <div class="card">
      <div class="card-body">
      <p class="card-text"><?php echo $row["price2"]; ?></p>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <h5 class="pt-4">Reviews</h5>
    <div class="card">
      <div class="card-body">Customer Reviews</div>
    </div>
  </div>
  </div>

  <div class="container">
    <h5 class="pt-4">Contact Information</h5>
    <div class="card">
      <div class="card-body">

        <p class="card-text"></p>
        <a href="#" class="btn " style="background-color:#FB550C;color:#fff;margin-left:90%;">Check Availability</a>
      </div>

    </div>
  </div>




<?php
  }

} 
?>












  <!-- Required js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>