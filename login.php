



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
			<?php
		session_start();
		include("config.php");
		if (isset($_POST["login"])){
		$username =$_POST['username'];
		$password =$_POST['password'];
		$usertype =$_POST['usertype'];
		//echo "$usertype";
		if ($usertype =="Desk officer"){
			# code...
		$sql = "SELECT *FROM users WHERE username='".$username."' AND pswd ='".$password."' AND usertype ='Desk officer'";
			$con = mysqli_query($dbconn,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
            if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
    		}
    		else{
    			header("location:deskoff.php");
    		}
    	}
    	elseif($usertype =="Stock Manager"){
    		$sql = "SELECT *FROM users WHERE username='".$username."' AND pswd ='".$password."' AND usertype ='Stock Manager'";
			$con = mysqli_query($dbconn,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
            if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
    		}
    		else{
    			header("location:stockmanager.php");
    		}
    		
    	}
    	elseif($usertype =="Manager"){
    		$sql = "SELECT *FROM users WHERE username='".$username."' AND pswd ='".$password."' AND usertype ='Manager'";
			$con = mysqli_query($dbconn,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
            if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
    		}
    		else{
    			header("location:managerhome.php");
    		}
    		
    	}
    	elseif($usertype =="Admin"){
    		$sql = "SELECT *FROM users WHERE username='".$username."' AND pswd ='".$password."' AND usertype ='Admin'";
			$con = mysqli_query($dbconn,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
            if($rows==0){
				echo "yes";
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
    		}else{
    			echo "no";
    			header("location:deskhome.php");
    		}
    	}
		
	}


 	?>
		</div>

		<div class="col">
			<div class="container cont">
				<form method="post" action="login.php" class="row g-3"  >

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
                      <option value="Desk officer">Desk officer</option>
                      <option value="Stock Manager">Stock manager</option>
                      <option value="Manager">Manager</option>
                      <option value="Admin">Admin</option>
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