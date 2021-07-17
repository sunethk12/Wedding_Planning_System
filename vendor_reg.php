<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wedding">
    <meta name="author" content="Wedding">
    <meta name="keywords" content="Wedding">

    <!-- Title Page-->
    <title>Vendor Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>





    <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Vendor Registration</h2>
                    <form action="controller.php" method="POST" onsubmit="return validate()">


                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="First Name" name="fname"
                                         required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Last Name"
                                         name="lname"  required>
                                </div>
                            </div>
                     </div>


                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="NIC Number" name="nic" id="idno"
                                onkeyup="idcheck()"> 
                        </div>

                        <div class="conalert">
                                <error id="idalert"></error>
                        </div>

                        

                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Email" name="email" required>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Password" name="pws"
                                        id="password" required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Confirm Password"
                                        id="confirm_password" name="confirm_pws" onkeyup="check(this)" required>
                                </div>



                            </div>


                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                            <error id="sto"></error>
                            </div>

                            <div class="col-2">
                                <div class="conalert">
                                    <error id="alert"></error>
                                </div>

                            </div>


                        </div>





                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Contact Number"
                                        name="contact" id="cont" onkeyup="checktp()" required>

                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group--style-2">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="location">

                                            <option disabled="disabled" selected="selected">Location</option>
                                            <option>Colombo</option>
                                            <option>Galle</option>
                                            <option>Gampaha</option>
                                            <option>Kandy</option>
                                            <option>Kurunegala</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">
                            <div class="col-2 conalert">
                            <error id="tpalert1"></error>
                            

                            </div>

                            <div class="col-2">

                                

                            </div>


                        </div>



                        <div class="row row-space">
                            <div class="col-2">
                            </div>
                            <div class="col-2">
                                <div class="p-t-30">
                                <button class="btn btn--radius btn--green" type="submit" name="vendorSave" >Submit</button>
                                </div>
                            </div>
                        </div>







                        
                        


                    </form>
                </div>
            </div>
        </div>
    </div>










    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>




</body>



<script type="text/javascript">

function idcheck() {
        var x = document.getElementById('idno').value;
        var n=x.length;
        var nid = x.substr(9,15);
        var nidt = x.substr(0,9);

        if(n!=10){
            document.getElementById('idalert').innerHTML="NIC number is incorrect";
        }else if(nid!="v" && nid!="V"){
            document.getElementById('idalert').innerHTML="character ' v / V ' is not include NIC number that You have entered";
        }else if(isNaN(nidt)){
            document.getElementById('idalert').innerHTML="First 9 characters must be numbers "; 
           
        }else{
            document.getElementById('idalert').innerHTML=" "; 
        }
   
    }

</script>



</html>
<!-- end document-->