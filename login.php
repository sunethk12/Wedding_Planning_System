


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    
</head>

<body>


    <div class="loginbox">
        <img src="images/login.png" alt="" class="user">
       
        <h1>Login Here</h1>
        <form action="controller.php" method="POST">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="login" value="Login">

            <a href="#">Forgot Your Password?</a><br><br>
            <a href="index2.php">Back to Homepage</a> <br><br>
           
        </form>
    </div>
   



</body>



</html>



