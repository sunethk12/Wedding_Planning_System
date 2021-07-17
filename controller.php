<html>
	<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body></body>
</html>



<?php

include("model.php");


//customer registration 

if(isset($_POST["customerSave"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $id=$_POST["nic"];
    $email=$_POST["email"];
    $password=md5($_POST["pws"]);
    $contact=$_POST["contact"];
    $location=$_POST["location"];
    $ut="customer";
    


    $arr=array($fname,$lname,$id,$email,$password,$contact,$location,$ut);
    
    if($obj->save("user",$arr)){

        echo "<script type='text/javascript'>			
        swal({ title: 'You have successfully registered!',text: 'You can login now...',icon: 'success'}).then(okay => {
        if (okay) {
        window.location.href = 'login.php';}
        });
        </script>";



       
    }else{
        echo "<script type='text/javascript'>			
        swal({ title: 'Registration Failed!',text: 'Try again...',icon: 'error'}).then(okay => {
        if (okay) {
        window.location.href = 'customer_reg.php';}
        });
        </script>";
    }

}


// vendor registration

if(isset($_POST["vendorSave"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $id=$_POST["nic"];
    $email=$_POST["email"];
    $password=md5($_POST["pws"]);
    $contact=$_POST["contact"];
    $location=$_POST["location"];
    $ut="vendor";
    
    $arr=array($fname,$lname,$id,$email,$password,$contact,$location,$ut);
    
    if($obj->save("user",$arr)){
        echo "<script type='text/javascript'>			
        swal({ title: 'You have successfully registered!',text: 'Now you can register your business',icon: 'success'}).then(okay => {
        if (okay) {
        window.location.href = 'business_registration.php';}
        });
        </script>";
        $_SESSION["email"] = $email;
    }else{
        echo "<script type='text/javascript'>			
        swal({ title: 'Registration Failed!',text: 'Try again...',icon: 'error'}).then(okay => {
        if (okay) {
        window.location.href = 'vendor_reg.php';}
        });
        </script>";
    }
}

//contact us 

if(isset($_POST["sendMessage"])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];
    $message=$_POST["message"];


    $arr=array($name,$email,$contact,$message);


    if($obj->save("contact_info",$arr)){
        echo "Success";
    }else{
        echo "Failed";
    }

}

// business registration

if(isset($_POST["businessReg"])){
    
    $b_name=$_POST["b_title"];
    $b_email=$_POST["b_email"];
    $contact=$_POST["contact"];
	$reg_num=$_POST["reg_num"];
    $location=$_POST["location"];
    $status="pending";
    $u_email=$_SESSION["email"];

    


	$image=$_FILES["logo"]["name"];
    $temp=$_FILES["logo"]["tmp_name"];
    $path="uploads/".$image;


    move_uploaded_file($temp,$path);
  
    $arr=array($b_name,$b_email,$contact,$reg_num,$location,$path,$status,$u_email);
    
    if($obj->save("business_reg",$arr)){
        echo "<script type='text/javascript'>			
        swal({ title: 'Business registered successfully!',text: 'You can login after admin approval',icon: 'success'}).then(okay => {
        if (okay) {
        window.location.href = 'logout.php';}
        });
        </script>";
    }else{
        echo "Failed";
    }
}

// user login 

if(isset($_POST["login"])){

//data sanitization to prevent SQL injection
    $email = mysqli_real_escape_string($obj->connect(),$_POST['email']);
	$password = mysqli_real_escape_string($obj->connect(),$_POST['password']);

    $password = md5($password);
    
    

   if($obj->login($email,$password)=="customer"){
    $_SESSION["email"] = $email;
    header('location: customer_dash.php');
    
   }elseif($obj->login($email,$password)=="invalid"){
    echo "<script type='text/javascript'>			
    swal({ title: 'Incorrect email or password',text: 'Try again...',icon: 'error'}).then(okay => {
    if (okay) {
    window.location.href = 'login.php';}
    });
    </script>";
   } 
   elseif($obj->login($email,$password)== "vendor" ){
    $_SESSION["email"] = $email;
    header('location: vendor_dashboard.php');
   
   } elseif($obj->login($email,$password)== "no" ){
    echo "<script type='text/javascript'>			
    swal({ title: 'Your account has not approved yet!',text: 'Try again...',icon: 'error'}).then(okay => {
    if (okay) {
    window.location.href = 'login.php';}
    });
    </script>";
   }
   elseif($obj->login($email,$password)== "admin" ){
    $_SESSION["email"] = $email;
    header('location: admin.php');
   
   } 

}


if(isset($_GET["id"])){

    $id = $_GET["id"];
    
      $res= mysqli_query($obj->connect(),"update business_reg set status='active' where u_email ='$id' ");
      if($res){
        echo "<script type='text/javascript'>			
        swal({ title: 'Account approved!',text: '',icon: 'success'}).then(okay => {
        if (okay) {
        window.location.href = 'pending_reg.php';}
        });
        </script>";

      } else{
        echo "<script type='text/javascript'>			
        swal({ title: 'Failed',text: 'Try again...',icon: 'error'}).then(okay => {
        if (okay) {
        window.location.href = 'pending_reg.php';}
        });
        </script>";
      }
    
    
    }


 // add services

    if(isset($_POST["services"])){
    
        $category=$_POST["category"];
        $package1=$_POST["package1"];
        $package2=$_POST["package2"];
        $price1=$_POST["price1"];
        $price2=$_POST["price2"];


        $us=$_SESSION["email"];
        $us_regid = ($obj->userRegid($us));

        
        
        $image1=$_FILES["img1"]["name"];
        $temp1=$_FILES["img1"]["tmp_name"];
        $path1="uploads/".$image1;
    
        $image2=$_FILES["img2"]["name"];
        $temp2=$_FILES["img2"]["tmp_name"];
        $path2="uploads/".$image2;
    
    
        $image3=$_FILES["img3"]["name"];
        $temp3=$_FILES["img3"]["tmp_name"];
        $path3="uploads/".$image3;
    
    
        move_uploaded_file($temp1,$path1);
        move_uploaded_file($temp2,$path2);
        move_uploaded_file($temp3,$path3);
      
        $arr=array($category,$package1,$package2,$price1,$price2,$path1,$path2,$path3,$us_regid);
        
        if($obj->save("services",$arr)){
            echo "<script type='text/javascript'>			
            swal({ title: 'Your Service Added Successfully!',text: '',icon: 'success'}).then(okay => {
            if (okay) {
            window.location.href = 'vendor_dashboard.php';}
            });
            </script>";
        }else{
            echo "Failed";
        }
    }


   
    




?>
