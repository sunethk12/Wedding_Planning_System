<?php
include("model.php");
?>



<!DOCTYPE html>

<html lang="en">

<head>
	<title>Photographers</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="css/all.min.css">     <!--awesome fonts-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>

<?php
include("navbar.php");
?>

<div class="container mt-3">


<?php

$res=mysqli_query($obj->connect(),"select business_reg.reg_number, business_reg.b_title,business_reg.logo,services.price1,services.price2 from business_reg,services where business_reg.reg_number=services.b_regno and services.category='Photography'");



 while($row=mysqli_fetch_array($res)){

?>



<div class="card mb-3">
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo $row["logo"]; ?>" class="card-img simg">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["b_title"]; ?></h5>
                <p class="card-text">Package Price  :</p><?php echo $row["price1"]; ?>
                
            </div>
        </div>
        <div class="col-md-2 mt-5">
            
			<a href="profile_generate.php?reg_id=<?php echo $row["reg_number"];?>"  class="btn" style="background-color:#FB550C;color:#fff;">View Profile</a>
        </div>
    </div>
</div>




<?php
 }

?>
</div>



	<!--js-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
		crossorigin="anonymous"></script>



</body>

</html>



