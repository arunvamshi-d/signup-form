<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body{
        background-image:url("./assets/bg1.jpg");
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
</style>
</HEAD>
<BODY>
    <div>
    
	<div class="phppot-container" >
        <div class="col btn btn-danger" style="margin-top:5% !important;"> User Dashboard</div><div class="page-header">
		</div>
		<div class="page-content jumbotron" style="  background-color: red;
  background-image: linear-gradient(to right, darkgoldenrod , purple);">
  <h4 style="color:white; font-weight:bold;">Welcome to Account <?php echo $username;?>! Please enter following details.(Optional)</h4>
  <div class="row">
						<div class="inline-block">
							<div class="form-label">
								Date Of Birth(DOB):
							</div>
							<input class="input-box-330" type="date" name="username"
								id="datepicker">
						</div>
					</div>
                    <div class="row">
						<div class="inline-block">
							<div class="form-label">
								Age:
							</div>
							<input class="input-box-330" type="number" name="username"
								id="username">
						</div>
					</div>
                    <div class="row">
						<div class="inline-block">
                        <div class="form-label">
								Contact Number:
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
                    <div class="row">
						<div class="inline-block">
							<div class="form-label">
								Address to Contact:
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>    
    </div>
  <span class="login-signup btn btn-warning"><a href="submit.php" style="color:white">Submit</a></span>
	</div>
</div>
</BODY>
</HTML>
