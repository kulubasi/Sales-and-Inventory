<?php
session_start();
if(isset($_SESSION['$username_j'])){
}else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stock</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>  <!-- styles data tables -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/style.css"> <!-- My custom css file -->

	<style type="text/css">
		a{ text-decoration: none;  }
	</style>
</head>
<body class="" style="font-family:cursive;font-size: large;">
	<!-- nav bar start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container-fluid">
	  	<!-- offcanvas trigger -->
	  	<button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
	  <span class="navbar-toggler-icon " data-bs-target="#offcanvasExample"></span>
	</button>
	  	<!-- end of offcanvas trigger -->
	    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Sales and Inventory</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">

	      <form class="d-flex ms-auto" role="search">
	      	<div class="input-group my-3 my-lg-0">
	        	<input type="text" class="form-control" value="Username: <?php echo $_SESSION['$username_j']?>" aria-label="Recipient's username" aria-describedby="button-addon2">
			  	<button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
			</div>

	      </form>
	      <?php
	      	$a=$_SESSION['$username_j'];
            include("config.php");
	       ?>
	      <ul class="navbar-nav mb-2 mb-lg-0">
	      	<li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            <i class="bi bi-person-fill"></i>
	          </a>
	          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-2x" style="color: bue !important"> </i>Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- end of navbar -->

	<!-- off canvas -->
	<!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  	Link with href
	</a>
	<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
	  Button with data-bs-target
	</button> -->

	<div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	  
	  <div class="offcanvas-body p-0">
	  	<nav class="navbar-dark">
	  		<ul class="navbar-nav">
	  			<li>
	  				<div class="text-muted small fw-bold text-uppercase px-3">CORE
	  				</div>
	  			</li>
	  			<li>
	  				<a href="#" class="nav-link px-3 active">
	  				<span class="me-2">
	  					<i class="bi bi-speedometer2"></i>
	  				</span>
	  				<span>Dashboard</span>
	  				</a>
	  			</li>

	  			<li class="my-4">
	  				<hr class="dropdown-divider">
	  			</li>

	  			<li>
	  				<div class="text-muted small fw-bold text-uppercase px-3">Sales Report
	  				</div>
	  			</li>

	  			<li>
	  				<a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>Check Report</span>
	  				<span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
				  	</a>
				  	<div class="collapse" id="collapseExample">
					  <div class="">
					  	<ul class="navbar-nav ps-3">
					  		<li>
					  			<a href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span>Today</span>
					  			</a>
					  		</li>
					  		<li>
					  			<a href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span>This week</span>
					  			</a>
					  		</li>

					  		<li>
					  			<a href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span>One Month</span>
					  			</a>
					  		</li>
					  		
					  	</ul>
					    
					  </div>
					</div>
				</li><hr><br>

				<li>
	  				<div class="text-muted small fw-bold text-uppercase px-3">Users
	  				</div>
	  			</li>
				<li>
	  				<a class="nav-link px-3 sidebar-link"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>Current Users</span>
	  				
				  	</a>

				  	<a href="signup.php" class="nav-link px-3 sidebar-link"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>Create New User</span>
	  				
				  	</a>
				  	
				</li><hr><br>

				<li>
	  				<div class="text-muted small fw-bold text-uppercase px-3">Suppliers
	  				</div>
	  			</li>
				<li>
	  				<a class="nav-link px-3 sidebar-link"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>View Suppliers</span>
	  				
				  	</a>
				  	
				</li><hr><br>

				<li>
	  				<div class="text-muted small fw-bold text-uppercase px-3">Assistance
	  				</div>
	  			</li>
				<li>
	  				<a class="nav-link px-3 sidebar-link"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>Help</span>
	  				
				  	</a>
				  	
				</li><br>

				

	  		</ul>
	  	</nav>

	    
	  </div>

	</div>
	<!-- end of off canvas -->
	

	<main class="mt-5 pt-3">
		<div class="container-fluid">
			<div style="margin:auto;">
				
				<div>
             
             <ol class="breadcrumb">
                <li style=" margin-left: 930px;">
                	<a href="#" style="text-decoration:none;"> Home</a>
                </li>>
               <!--  <li >
                	<a href="#" style="text-decoration:none;"> next</a>
                </li>>
                <li >
                	<a href="#">Pext</a>
                </li> -->
             </ol>
        </div>
				<div class="col-md-12 fw-bold fs-3">Dashboard</div>

			</div><br>

			<div class="row">
				<div class="col" >
					<div class="card text-white bg-success mb-3 h-100"  >
						<div class="card-header text-center" >My Employees</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">View Users</h5> -->
						    <p class="card-text text-center">View current users.</p>
						  </div>
					</div>
				</div>

				<div class="col">
					<div class="card text-white bg-success mb-3 h-100" >
						<div class="card-header text-center">Check stock</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-center">See how you standing in terms of stock.</p>
						  </div>
					</div>
				</div>
			</div><br>
			<div class="row">

				<div class="col">
					<div class="card text-white bg-success mb-3 h-100" >
						<div class="card-header text-center">Sales Report</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-center">Check your report about daily sales and expenditures.</p>
						  </div>
					</div>
				</div>

				<div class="col">
					<div class="card text-white bg-success h-100" >
						<div class="card-header text-center">Departments</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-center">Check current departments and assign new roles </p>
						  </div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">Charts</div>
						<div class="card-body">
							<canvas class="chart" width="400" height="200"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">Data Tables</div>
						<div class="card-body"></div>
					</div>
				</div>
			</div> -->
		</div>
	</main>

	<script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="DataTables/js/datatables.min.js"></script>
	<script type="text/javascript" src="DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>