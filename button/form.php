<?php

?>
<!doctype html>
<html>

<head>
  <title>vender</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="container">


    <form>
      <div class="form-group row">
        <div class="row">
          <div class="col-xs-12">

            <div class="col-xs-4 col-md-6">

              <input class="form-control" type="text" placeholder="select a vendor category">
            </div>
            <div class="col-xs-4 col-md-6">

              <input class="form-control" type="text" placeholder="Enter Location(Optional)">
            </div>

            <button type="button" class="btn btn-warning" id="updatebtn">Find vender</button>
          </div>
        </div>
      </div>

      <div class="form-control col-md-6">

        <select name="location">

          <option disabled="disabled" selected="selected">Location</option>
          <option>Colombo</option>
          <option>Galle</option>
          <option>Badulla</option>
          <option>Jafna</option>
          <option>Kandy</option>
        </select>


      </div>




    </form>
  </div>

</body>

</html>