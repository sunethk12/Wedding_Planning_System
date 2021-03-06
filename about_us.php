<?php
include("navbar.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.min.css">

</head>

<body>

  <!--Image-->
  <div class="container-fluid">
    <img src="Images/cover5.jpg" class="img-fluid" alt="..." width="1500px">
  </div>

  <br>


  <!--Heading-->
  <div class="container-fluid">
    <h1 style="color: #FB550C;font-size:300%;">Laksiri Wedding Planners</h1>
  </div>

  <br>


  <!--description cards-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Who We Are?</h5>
            <p class="card-text">we are well enthusiastic, professional wedding planners who have more than 10 years of
              experience in the wedding planning process.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">What We Do?</h5>
            <p class="card-text">We are ready to make your dream wedding by providing all the services at one place for
              reasonable budgets</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>

  <!--icon cards-->

  <div class="container-fluid">
    <hr>
    <div class="container" >
      <div class=" row text-center" id="heading">
        <div class="col-md-12 col-md-offset-3 wow animated zoomInDown" id="heading-text">
          <h3>Conatct Us</h3>
          <p>We are willing to response for you</p>
          <hr class="full">
          <br />
        </div>
        <div class="container">
        <div class="row">
          <div class="col mb-3 ">
            <div class="card h-100">
              <i class="fas fa-5x fa-map-marker-alt mt-5"></i>
              <div class="card-body">
                <h5 class="card-title">Address</h5>
                <p class="card-text">
                  No: 46, MC plaza, Kurunegala, Sri Lanka
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100">
              <i class="fas fa-5x fa-phone-alt mt-5"></i>
              <div class="card-body">
                <h5 class="card-title">Contact Number</h5>
                <p class="card-text">
                  +94 764567349
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100">
              <i class="fas fa-5x fa-envelope mt-5"></i>
              <div class="card-body">
                <h5 class="card-title">Email</h5>
                <p class="card-text">
                  laksiriweddings@gmail.com
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-3 ">
            <div class="card h-100">
              <i class="fas fa-5x fa-globe-americas mt-5"></i>
              <div class="card-body">
                <h5 class="card-title">Web Site</h5>
                <p class="card-text">
                  www.laksiriwedding.com
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  <br>

  <!--contact form-->
  <div class="container-fluid">

  <div class="mb-5" style="background-color: rgb(232, 239, 240);" >
    <h2 class="ml-3">Drop us a message</h2>
    <form action="controller.php" method="POST">
      <div class="form-group col-md-12">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group col-md-12">
        <label for="Email1">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group col-md-12">
        <label for="Contact">Conatct Number</label>
        <input type="text" class="form-control" name="contact">
      </div>
      <div class="form-group col-md-12">
        <label for="Message">Message</label>
        <textarea class="form-control" name="message" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="sendMessage" style="margin-left:90%;margin-bottom:20px;background-color:#FB550C;color:white;">Send Message</button>
    </form>
  </div>




  </div>
 
















  <!--js-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>



</body>

</html>


<?php
include("footer.php");

?>
