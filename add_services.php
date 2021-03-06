<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Services</title>

    <!-- meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/all.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--  CSS-->
    <link href="css/category.css" rel="stylesheet" media="all">

</head>

<body>

<?php
include("navbar.php");
?>




    <div class="container-fluid">
        <div class="page-wrapper  p-t-100 p-b-50" style="background-color: rgb(248, 248, 242);">
            <div class="wrapper wrapper--w900">
                <div class="card card-6">
                    <div class="card-heading">
                        <h2 class="title" style="margin-left:50px;">Services</h2>
                    </div>
                    <div class="card-body">
                        <form action="controller.php" method="POST" enctype="multipart/form-data">


                            <div class="form-row">
                                <div class="name">Category</div>
                                <div class="input-group--style-2">
                                    <div class="rs-select2 js-select-simple select--no-search name">
                                        <select name="category">

                                            <option disabled="disabled" selected="selected">Category</option>
                                            <option>Bridal Saloons</option>
                                            <option>DJ & Entertainment</option>
                                            <option>Florists & Decorations</option>
                                            <option>Hotels</option>
                                            <option>Photography</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">


                                <div class=" input-group">
                                    <div class="name">Package Details</div>
                                    <div class="value col-4">
                                        <textarea class="textarea--style-6" name="package1"
                                            placeholder="Enter your package details here..."></textarea>
                                    </div>
                                    <div class="value col-4">
                                        <textarea class="textarea--style-6" name="package2"
                                            placeholder="Enter your package details here..."></textarea>
                                    </div>

                                </div>



                            </div>


                            <div class="form-row ">
                                <div class="name ">Price (LKR)</div>
                                <div class="value col-4">
                                    <input class="input--style-6" type="text" name="price1">
                                </div>

                                <div class="value col-4">
                                    <input class="input--style-6" type="text" name="price2">
                                </div>

                            </div>




                            <div class="form-row">
                                <div class="name">Upload Images</div>
                                <div class="value">
                                    <p><input type="file" name="img1"></p> <br>
                                    <p><input type="file" name="img2"></p> <br>
                                    <p><input type="file" name="img3"></p> <br>
                                </div>
                            </div>










                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit" name="services" style="background-color:#FB550C;color:white;width:100px;height:50px;text-weigth:bold;margin-left:750px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>



    <?php
include("footer.php");
?>




    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/upload.js"></script>




</body>

</html>