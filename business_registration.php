<?php
include("model.php");

?>





<!DOCTYPE html>
<html lang="en">

<head>

    <title>Business Registration</title>

    <!-- meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
        <div class="page-wrapper  p-t-100 p-b-50" style="background-color: rgb(239, 241, 236);">
            <div class="wrapper wrapper--w900">
                <div class="card card-6">
                    <div class="card-heading">
                        <h2 class="title" style="margin-left:50px;">Business Registration</h2>
                    </div>
                    <div class="card-body">
                        <form action="controller.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="name">Business Title</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="b_title">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Business Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="email" name="b_email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Contact Number</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="contact">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Registration Number</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="reg_num" readonly value="<?php echo ($obj->autoNumber("business_reg"));  ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Location</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="location" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Upload Logo</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input class="input-file" type="file" name="logo" id="file">
                                        <label class="label--file" for="file">Choose file</label>
                                        <span class="input-file__info">No file chosen</span>
                                    </div>
                                    <div class="label--desc">Upload your logo. Max file
                                        size 5 MB</div>
                                </div>
                            </div>






                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit" name="businessReg" style="background-color:#FB550C;color:white;width:100px;height:50px;text-weigth:bold;margin-left:750px;">Submit</button>
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