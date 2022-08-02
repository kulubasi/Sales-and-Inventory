
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
		a{ text-decoration: none; color: white; }
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
	        	<input type="text" class="form-control" placeholder="Search product" aria-label="Recipient's username" aria-describedby="button-addon2">
			  	<button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
			</div>

	      </form>
	      <ul class="navbar-nav mb-2 mb-lg-0">
	      	<li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            <i class="bi bi-person-fill"></i>
	          </a>
	          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">My Profile</a></li>
	            <li><a class="dropdown-item" href="#">Update Profile</a></li>
	            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-2x" style="color: bue !important"> </i>Logout</a></li>
	            <!-- <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
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
	  				<div class="text-muted small fw-bold text-uppercase px-3">My account
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

				<!-- <li>
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
				  	
				</li><hr><br> -->

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
		<div class="container-fluid" id="container">
			<div class="row">
				<div class="col-md-12 fw-bold fs-3">My sales account</div>
			</div><br>

			<div class="row">
				<div class="col" >
					<div class="card text-white bg-success mb-3 h-100"  >
						<div class="card-header text-center" >Income</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">View Users</h5> -->
						    <p class="card-text text-center addit" id="addit">Take transaction.</p>
						  </div>
					</div>
				</div>

				<div class="col">
					<div class="card text-white bg-success mb-3 h-100" >
						<div class="card-header text-center">Expenditures</div>
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-center adde" id="adde">Record Expense.</p>
						  </div>
					</div>
				</div>
				<div>
			<form id="addExpense" class="addExpense" method="post">
				<label for="exampleInputEmail1" class="form-label text-uppercase">Record Expense</label>
				<div class="" style="position: absolute; right: 20px; top: 10px; cursor: pointer;" id="close">X</div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Item</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item">
			    <div id="emailHelp" class="form-text">Enter the item name.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Description</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Amount</label>
			    <input type="number" class="form-control" id="example" name="amount">
			  </div>
			  
			  <button type="submit" name="newexpense" class="btn btn-primary">Finish record</button>
			</form>
			<?php
				include("config.php");
				if(isset($_POST['newincome'])){
					$item=$_POST['itm'];
					$descri=$_POST['Descri'];
					$qtty=$_POST['amt'];
				

					$sql = "INSERT INTO income (`items`, `Descript`,`Amount`) VALUES ('$item', '$descri','$qtty')";

					if (mysqli_query($dbconn, $sql)) {
					  echo "Item has been added successfully";
					  echo "<script>window.location.href='deskoff.php';</script>";
					  //header('Location:managerhome.php');
					  //exit();
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>

			</div><br>
			<div>
			<form id="addIncome" class="addIncome" method="post">
				<label for="exampleInputEmail2" class="form-label text-uppercase">Record Income</label>
				<div class="" style="position: absolute; right: 20px; top: 10px; cursor: pointer;" id="close2">X</div>
			  <div class="mb-3">
			    <label for="exampleInputEmail2" class="form-label">Item</label>
			    <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="itm">
			    <div id="emailHelp" class="form-text">Enter the item name.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword2" class="form-label">Description</label>
			    <input type="text" class="form-control" id="exampleInputPassword2" name="Descri">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword2" class="form-label">Amount</label>
			    <input type="number" class="form-control" id="exampleInputPassword2" name="amt">
			  </div>
			  
			  <button type="submit" name="newincome" class="btn btn-primary">Finish record</button>
			</form>

			<?php
				include("config.php");
				if(isset($_POST['newexpense'])){
					$item=$_POST['item'];
					$desc=$_POST['desc'];
					$qtty=$_POST['amount'];
				

					$sql = "INSERT INTO expenses (`item`, `descri`,`amt`) VALUES ('$item', '$desc','$qtty')";

					if (mysqli_query($dbconn, $sql)) {
					  echo "Item has been added successfully";
					  echo "<script>window.location.href='deskoff.php';</script>";
					  //header('Location:managerhome.php');
					  //exit();
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>
         
			
		</div>
			
		</div>
	</main>
 
	<script type="text/javascript">
		
		let contain = document.getElementById('contain');
		

		let add2 = document.getElementById('addit');
		let close1 = document.getElementById('close2');
		let addIncome = document.getElementById('addIncome');
		

		add2.addEventListener('click',(e)=>{
			e.preventDefault();
			addIncome.classList.add('active')
			document.body.classList.add('overflow')
		})

		close2.addEventListener('click',(e)=>{
			e.preventDefault();
			addIncome.classList.remove('active')
			document.body.classList.remove('overflow')
		})

	</script>

	<script type="text/javascript">
		let container = document.getElementById('container');
		

		let add1 = document.getElementById('adde');
		let close = document.getElementById('close');
		let addstock = document.getElementById('addExpense');
		

		add1.addEventListener('click',(e)=>{
			e.preventDefault();
			addstock.classList.add('active')
			document.body.classList.add('overflow')
		})

		close.addEventListener('click',(e)=>{
			e.preventDefault();
			addstock.classList.remove('active')
			document.body.classList.remove('overflow')
		})


	</script>

	<script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="DataTables/js/datatables.min.js"></script>
	<script type="text/javascript" src="DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>