<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:dashboard.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="Invalid Login Details";
		}
	}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from www.habibtrustreserves.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 02:47:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<title>Habib Trust Reserve | Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/main.css">
	<link href="assets/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
	<!-- ================== END BASE CSS STYLE ================== -->
  <script src="https://kit.fontawesome.com/7bc1511fed.js" crossorigin="anonymous"></script>
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/loader/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="inverse-mode" style="background-image: url(img/sunset.jpg); background-size:cover; background-attachment:fixed;">
	<!-- BEGIN #page-container -->
	<div id="page-container">
		<!-- BEGIN login -->
        <div class="login"><img src="img/logo.png" height="60" width="150" style="padding: 10px 10px; ">
		<b style="font-size:2.0em; color:#fff;"></b>
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 				<!-- BEGIN login-brand -->
                     <?php if(isset($msg)){?>
              <div class="error">
              <span><?php echo $msg;?></span>
              </div>
            <?php } ?>
				<div class="login-brand">
					<a href="#"><span class="fa fa-lock logo"></i></span> Internet Banking | </a>
				</div>
				<!-- END login-brand -->
				<!-- BEGIN login-desc -->
				<div class="login-desc">
					Login securely into your account
        </div>
				<!-- END login-desc -->
				<!-- BEGIN login-form -->
				<form method="POST">
					<div class="form-group">
						<label class="control-label">Account Username</label>
            <input name="Username" type="text" class="form-control" placeholder="Enter Your Account Username" autofocus>
						<!-- <input type="text" name="acc_no" class="form-control" placeholder="Enter Your Account Username" autofocus /> -->
						<input type="hidden" name="code" value="" class="form-control" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
            <input name="Password" type="password" class="form-control" placeholder="Enter Password" value="">
						<!-- <input type="password" name="upass" class="form-control" placeholder="Enter Password" value="" /> -->
					</div>
					
					<input name="Submit" type="submit" value="Sign In" class="btn btn-inverse">
					<!-- <button type="submit" name="login" class="btn btn-inverse">Sign In</button> -->
					
				</form>
				
				<!-- END login-form --><br><br><br><br><br><br><br><br><br><br><br>
				<footer class="">
		&copy; 2021 Habib Trust Reserve Inc. All Rights Reserved.
			
		</footer>
			</div>
			<!-- END login-content -->
        </div>
        <!-- END login -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
		
	</div>
	<!-- END #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

</body>

<!-- Mirrored from www.habibtrustreserves.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 02:47:53 GMT -->
</html>
