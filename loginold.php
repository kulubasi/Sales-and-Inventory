



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ict.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
		a{ text-decoration: none; color: white; }
	</style>
</head>
<body class="bg-dark bg-gradient" style="font-family:cursive;font-size: large;";>
	<!-- nav bar start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container-fluid">
	  	<!-- offcanvas trigger -->
	  	<button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
	  <span class="navbar-toggler-icon " data-bs-target="#offcanvasExample"></span>
	</button>
	  	<!-- end of offcanvas trigger -->
	    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#"> Sales and Inventory </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">

	      <form class="d-flex ms-auto" role="search">
	      	<div class="input-group my-3 my-lg-0">
	        	
			</div>

	      </form>
	      <ul class="navbar-nav mb-2 mb-lg-0 text-white">
	      	<li style="margin-right: 20px;"><a href="index.php">Home</a></li>
	      	<li style="margin-right: 20px;">About</li>
	      	<li style="margin-right: 20px;">Contact Us</li>
	      	<!-- <li style="margin-right: 20px;"><a href="signup.php">Register</a></li> -->
	      	
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- end of navbar --><br><br>
	<!-- <div class="bod">
		<img src="img/ictlogo.png">
	</div> -->
	<div class="container text-white" style="margin-top:80px" >
		<h4 class="text-uppercase">Login</h4><br>
	<div class="row text-white">
		<div class="col">
			<p class="fw-light">Join the mllions of others in easily managing goods in stock, as well as sales and expenditures.To access the system please login with your assigned user role or type and user details</p><br>
			<button class="btn btn-success">Try it out</button>
		</div>

		<div class="col">
			<div class="container cont">
				<form method="post" class="row g-3"  >

                    <div class="input-group mb-3" style="font-size: 12px">
                        <input type="text" name="username" id="username" required class="form-control input_user"  placeholder="Username" >
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user fa-2x"></i>
                            </span>
                        </div>
                    </div>
		                                 
                    <div class="input-group mb-2">
                        <input type="password" name="password" id="password" required class="form-control input_pass" placeholder="Password" >
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-key fa-2x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                     <select class="form-select" aria-label="Default select example" name="usertype">
                      <option value="Employer">Desk officer</option>
                      <option value="Jobseeker">Store keeper</option>
                      <option value="Jobseeker">Manager</option>
                      <option value="Jobseeker">Admin</option>
                    </select>
                    </div>

                    <div class="d-flex  mt-3 login-container">
                        <button type="submit" name="login" id="login" class="btn login_btn btn btn-success text-white"><i class="fa fa-lock"></i> Login</button>
                    </div>
                        

                </form><br>
                <h6>Forgot password</h6><br>
                <h6>Resend Confirmation</h6>
				
			</div>
		</div>
		
	</div>
	</div>
	
	
	
</body>
</html>


<?php
	session_start();
	include("config.php");
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$usertype =$_POST['usertype'];

		$sql = "SELECT *FROM users WHERE username='$username' AND pswd ='$password' AND usertype ='$usertype'";
		$result = mysqli_query($dbconn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "yes it has worked";
		  }

		else {
			echo "0 results";
		}

		


		// if ($con == true) {
		// 	echo "Request Failed! Please Try Again";
		// }
		// else{
		// 	echo"no";

		/*$rows = mysqli_num_rows($con);
        $records = mysqli_fetch_array($con);
		if($rows>0){
			$_SESSION['id']=$records['id'];
			$_SESSION['fname']=$records['fname'];
			$_SESSION['lname']=$records['lname'];
			$_SESSION['email']=$records['email'];
			$_SESSION['tel'] =$records['tel'];
			$_SESSION['$username']=$records['username'];

			header("location:deskhome.php");
			
		}
		else{
			echo '<script>alert("Failed to log you in, Make sure your UserName, usertype and Password are matching"); window.location="login.php";</script>';
			
		}*/
	// }
	

		// mysqli_close($dbconn);

		
	}
	

	?>
