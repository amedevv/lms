<?php 
ob_start();
require_once 'config.php';

    session_start();
    if(isset($_SESSION["username"])) {
        header("Location: dashboard.php");
        exit();
    }else{

    }

?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>تسجيل دخول | الأدمن</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style type="text/css">
	.alert-danger{
	    background-color: #e75656;
	    padding: 8px;
	    color: #fff;
	    font-weight: bold;
	    margin-top: 17px;
	    text-align: center;
	}
</style>

</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">مرحباً بك</h1>
							<p class="lead">
								قم بتسجيل الدخول للمتابعة
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="../img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form action="" method="POST">
										<div class="mb-3">
											<label class="form-label">اسم المستخدم</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="ادخل اسم المستخدم هنا" />
										</div>
										<div class="mb-3">
											<label class="form-label">كلمة السر</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="ادخل كلمة السر هنا" />
											<small>
            <!-- <a href="index.html">Forgot password?</a> -->
          </small>
										</div>
										<div>
<!-- 											<label class="form-check">
            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
           
            <span class="form-check-label">
              Remember me next time
            </span>

          </label> -->
										</div>
										<div class="text-center mt-3">
											<!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
											<input type="submit" class="btn btn-lg btn-primary" name="submit" value="تسجيل دخول">
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>

<?php 

	if (isset($_POST['submit'])) {

		  if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){

		      $username = mysqli_real_escape_string($conn,$_POST['username']);
		      $password = mysqli_real_escape_string($conn,$_POST['password']);
		      $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		      $result = mysqli_query($conn, $query) or die(mysql_error());
		      $rows = mysqli_num_rows($result);

		      if($rows >= "1"){
		        $_SESSION['username'] = $username;
		        // echo $response = '{"status":1,"message":"Success !"}';
		        header("Location: dashboard.php");
		      }else{
		      echo $response = "<p class='alert alert-danger'>اسم المستخدم وكلمة السر غير صحيحة</p>";
		      }


		  }else{
		      echo $response = '{"status":0,"message":"Error !","errMSG":"You must enter a valid username & password"}';
		  }
	}


?>


								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>