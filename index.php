<?php

$servername="localhost";
$user="root";
$password="";
$db="weather";

$con = mysqli_connect ($servername,$user,$password,$db);
//mysql_select_db();
if (mysqli_connect_errno()){
	echo "Failed to connect to database" . mysqli_connect_error();
}

if(isset($_POST['username'])){
	$usname =$_POST['username'];
	$password =$_POST['password'];

	$sql ="select * from login where user='".$usname."'AND pass= '".$password."' limit 1";
	
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)==1){
        header("Location:main.html");
		echo "Login Successfully";
		exit();

	}
	else{
		echo "Password incorrect";
		exit();

	}
}

?>

<!DOCTYPE html>
<head>
    <title>Current Weather </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/noaa-5YryiYcFvtA-unsplash.jpg');">
            <div class="wrap-login100 p-t-30 p-b-500">
                <span class="login100-form-title p-b-41">
                   <h2>  Login </h2>
                </span>
              
                <form method="POST" action="#" class="login100-form validate-form p-b-33 p-t-5">

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input  class="input100" type="text" name="username" placeholder="Enter User Name" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Enter password" />
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <!-- <div>
                        <input  class="container-login100-form-btn m-t-15" type="submit"
						  value="LOGIN"  />
                    </div> -->
                    <div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
                </form>
            </div>
        </div>
    </div>


    

</body>

</html>