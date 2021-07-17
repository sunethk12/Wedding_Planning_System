<?php
include("model.php");
?>



<!DOCTYPE html>

<html lang="en">

<head>
	<title></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<link rel="stylesheet" href="css/all.min.css">     <!--awesome fonts-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>




<div class="container mt-5">
  
<h1>Pending Registrations</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Business Title</th>
      <th scope="col">Business Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Reg. Number</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


<?php
$data=$obj->viewData("business_reg","status","pending");

foreach($data as $key=>$value){

?>

  <tbody>
    <tr>
      <td><?php echo $value["b_title"]?></td>
      <td><?php echo $value["b_email"]?></td>
      <td><?php echo $value["contact"]?></td>
      <td><?php echo $value["reg_number"]?></td>
      <td><?php echo $value["location"]?></td>
      
      <td><a href="controller.php?id=<?php echo $value["u_email"];?> "  class="btn" style="background-color:white;">Approve</a></td>
    </tr>
   
    <?php
    
}

?>
  </tbody>

  
</table>
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



