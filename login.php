<?php
    //CONNECT TO DATABASE
    session_start();
    $db = mysqli_connect('localhost','root','','eklinik');

    //LOG IN
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //ensure that form fields are filled properly
        if(empty($username)) {
            $error = "Please insert your username!";

            $_SESSION['error'] = $error;
            header('location: login.php');

        }else {
            if (empty($password)) {
                $error = "Please insert your password!";

                $_SESSION['error'] = $error;
                header('location: login.php');
            }else {
                $login = "SELECT * FROM loginunithep WHERE username='$username' AND password='$password'";
                $log_in = mysqli_query($db, $login);

                if(mysqli_num_rows($log_in) == 1) {
                    //log user in
                    $data = "SELECT * FROM loginunithep WHERE Nama='$username'";
                    $log_data = mysqli_query($db, $data);
                    $row = mysqli_fetch_array($log_data);

                    $_SESSION['error'] = null;

                    //$row['id'] == column id
                    //$row['password'] == column password
                    //$row['username'] == column username
                    //$_SESSION['fr_id'] = $row['id'];
                    //$_SESSION['fr_password'] = $row['password'];
                    //$_SESSION['fr_full_name'] = $row['full_name'];
                    header('location: index.php'); //redirect to personal homepage
                        
                }else {
                    $error = "The username or password does not match with any account!";
                    $_SESSION['error'] = $error;
                    header('location: login.php');
                }

            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log masuk Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/Pintu Utama KVSA.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log Masuk Admin
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Nama">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Kata Kunci">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						
							
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="Log Masuk"> <br><br>
					<?php if (isset($_SESSION['error'])): ?><br>
                    <span class="error"><?php echo $_SESSION['error']; ?></span><br>
					<?php endif ?>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>