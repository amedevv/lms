<?php 
include("auth_session.php");
require_once 'config.php';
		$vaResponse="";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['subject'],$_POST['subType'],$_POST['title'],$_POST['content']) && !empty($_POST['subject']) && !empty($_POST['subType']) && !empty($_POST['title']) && !empty($_POST['content'])  ) {
    		
    	$subject = $_POST['subject'];
    	$subType = $_POST['subType'];
    	$title = $_POST['title'];
    	$content = $_POST['content'];
    	$username = $_SESSION["username"];
    	$uniqId = rand(999,99999); 
		$query = "INSERT INTO items (title,subject,data_type,content,item_id,author,created_at) VALUES ('$title','$subject','$subType','$content','$uniqId','$username',CURRENT_TIMESTAMP())";
		if (@mysqli_query($conn,$query)) {
    		$vaResponse = "<p class='alert alert-success'>تم الأضافةبنجاح</p>";
		    // echo $response = '{"status":1,"message":"Success !"}';
		}else{
    		$vaResponse = "<p class='alert alert-danger'>خطأ , هناك مشكلة بقاعدة البيانات</p>";
		}

    }else {
    	$vaResponse = "<p class='alert alert-danger'>يجب ملئ جميع الحقول</p>";
    }
}







?>
<!DOCTYPE html>
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>لوحة تحكم الادمن</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<!-- <link href="../assets/css/summernote.min.css" rel="stylesheet"> -->
 
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="../assets/css/summernote-audio.css" rel="stylesheet">

	<script src="../assets/js/jquery.js"></script>

     <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.11/dist/summernote-bs4.min.css" rel="stylesheet"> -->
     <style type="text/css">
 		.alert-danger{
	    background-color: #e75656;
	    padding: 8px;
	    color: #fff;
	    font-weight: bold;
	    margin-top: 17px;
	    text-align: center;
	}
     	.alert-success {
	    background-color: #42db86;
	    padding: 8px;
	    color: #fff;
	    font-weight: bold;
	    margin-top: 17px;
	    text-align: center;
	}
	.card-body {
    font-size: 15px;
    font-weight: bold;
}
     </style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">لوحة التحكم</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						الصفحات
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">اضافة عنصر جديد</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">تسجيل خروج</span>
            </a>
					</li>


				</ul>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator"></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									0 New Notifications
								</div>
								<div class="list-group">

								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										0 New Messages
									</div>
								</div>
								<div class="list-group">

								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Admin</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">اضافة عنصر جديد</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Item details</h5>
								</div>
								<div class="card-body">
									<form action="" method="POST">
									<div class="row">

										<div class="col-lg-4">
					                        <label>اختيار المادة:<span style="color:red;font-weight:bold;">*</span> </label>
					                        <select name="subject" class="form-select form-select-lg" id="subject">
											<?php 
											 $sql = "SELECT * FROM categories";
											 $result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
											    $categoryTitle = $row['category_title'];
											    $categoryId = $row['category_id'];
											    echo "<option value='$categoryId'>$categoryTitle</option>";
											}

											}

											?>
					                        </select>

				                        </div>
				                        
				                        <div class="col-lg-4">
				                        	<label>اختار النوع:<span style="color:red;font-weight:bold;">*</span> </label>
					                        <select name="subType" class="form-select form-select-lg" id="subType">
					                        	<option value='Lectures'>Lectures</option>
					                        	<option value='Summaries'>Summaries</option>
					                        	<option value='Exams'>Exams</option>
					                        </select>
					                    </div>

				                        
				                        <div class="col-lg-6 mt-2">
				                        	<label>عنوان المحاضرة:<span style="color:red;font-weight:bold;">*</span> </label>
				                        	<input type="text" class="form-control form-control-lg" name="title" placeholder="Enter article title EX. Lecture 1 Or Summarie of Lecture 1">
					                    </div>

				                        <div class="col-lg-12 mt-4 clearfix">
				                        	<label>المحتوى:<span style="color:red;font-weight:bold;">*</span> </label>
											<textarea class="form-control" id="content" name="content" placeholder="Write Your Article"></textarea>
					                    </div>

					                    <br>
					                    <div class="col mt-4">
					                    <input type="submit" class="btn btn-primary w-100" name="submit" value="حفظ">
					                    </div>
									</div>
									</form>
									<?php echo $vaResponse; ?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-12 text-start">
							<p class="mb-0">
								<label class="text-muted" ><strong>Developed by</strong></label> - <a class="text-primary" href="https://www.facebook.com/abdo0m/" target="_blank"><strong>Abdulrahman Mohamed</strong></a>								&copy;
							</p>
						</div>
	
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="../js/app.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> -->

    <script>
		$(document).ready(function() {
			$('#content').summernote({
				height: 150,   //set editable area's height
			});
			
		});
	</script>
	<script src="../assets/js/summernote.min.js"></script>
	<script src="../assets/js/summernote-audio.js"></script>

</body>

</html>