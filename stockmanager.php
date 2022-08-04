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
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>  <!-- styles data tables -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/style.css"> <!-- My custom css file -->

	<style type="text/css">
		/*a{ text-decoration: none; color: white; }*/
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
	  				<div class="text-muted small fw-bold text-uppercase px-3">Stock account
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
	  				<div class="text-muted small fw-bold text-uppercase px-3">Products
	  				</div>
	  			</li>

	  			<li>
	  				<a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				    <span class="me-2">
	  					<i class="bi bi-layout-split"></i>
	  				</span>
	  				<span>Manage Products</span>
	  				<span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
				  	</a>
				  	<div class="collapse" id="collapseExample">
					  <div class="">
					  	<ul class="navbar-nav ps-3">
					  		<li>
					  			<a id="add" href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span >Restock items</span>
					  			</a>
					  		</li>
					  		<li>
					  			<a id="addnew" href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span >Add new Product</span>
					  			</a>
					  		</li>

					  		<li>
					  			<a href="" class="nav-link px-3">
					  				<span class="me-2">
					  					<i class="bi bi-layout-split"></i>
					  				</span>
					  				<span>Request for supplies</span>
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
				<?php
		            include("config.php");
		            $mydb ="SELECT * FROM  stock";
		            $run=mysqli_query($dbconn,$mydb);
		            if(mysqli_num_rows($run) > 0){
		            	$a =0;               
		                while($row=mysqli_fetch_array($run)){
		                    $id =$row[0];
		                    $name=$row[1];
		                    $descri  =$row[2];
		                    $qtty =$row[3];
		                    $a+=1;

		                    if ($qtty < 10) {echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Hello Stock Manager!</strong>'.$name.' of '.$descri.'is low Please restock <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
							}
		                }
		         
		            }
		            else{
		            echo "<h3 >You have no current stock</h3>";
		            }
		                  
		            ?>
				
			</div>
			<div class="row">
				<div class="col-md-12 fw-bold fs-3 text-center">My stock account</div>
			</div><br>

			<div class="row">
				<div class="col" >
					<div class="card text-white bg-success mb-3 h-100"  >
						<!-- <div class="card-header text-center" >Store</div> -->
						  <div class="card-body">
						    <!-- <h5 class="card-title">View Users</h5> -->
						    <p class="card-text text-center">My Store.</p>
						  </div>
					</div>
				</div>

				<div class="col">
					<div class="card text-white bg-success mb-3 h-100" >
						<!-- <div class="card-header text-center">New Product</div> -->
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-center">Add new Product.</p>
						  </div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<table id="sample" class="table caption-top" style="margin: 20px;">
				  <h4 class="text-center">Current Stock</h4>
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Item</th>
				      <th scope="col">Description</th>
				      <th scope="col">Quantity</th>
				    </tr>
				  </thead>
				  <tbody>

				    <?php
		            include("config.php");
		            $mydb ="SELECT * FROM  stock";
		            $run=mysqli_query($dbconn,$mydb);
		            if(mysqli_num_rows($run) > 0){
		                echo "<div style='font-size:14px;'>"."<b>"."You current stock is as  follows"."</b>"."<div>";
		            	$a =0;               
		                while($row=mysqli_fetch_array($run)){
		                    $id =$row[0];
		                    $name=$row[1];
		                    $descri  =$row[2];
		                    $qtty =$row[3];
		                    $a+=1;
		                  echo '<tr>';
		                    echo'<td>' . $a.'</td>';
		                    echo'<td>' .$name.'</td>';
		                    echo'<td>' .$descri.'</td>';
		                    echo'<td>' .$qtty.'</td>';
		                    // echo  '<td align="center" > <a title="View Feedback" href="\example\capston\project\look.php?id='.$x.'"  class="btn btn-primary btn-xs  ">  <span ><i class="fas fa-eye"></i></span></a></td>';
		                  echo '</tr>';
		     
		                }
		         
		            }else{
		            echo "<h3 >You have no current stock</h3>";
		            }
		                  
		            ?>
		       


				  </tbody>
				</table>

				
			</div>
			
		</div>

		<div>
			<form id="addnewproduct" class="addnewproduct" method="post">
				<label for="exampleInputEmail1" class="form-label text-uppercase">Add New item</label>
				<div class="" style="position: absolute; right: 20px; top: 10px; cursor: pointer;" id="close1">X</div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Item name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item">
			    <div id="emailHelp" class="form-text">Enter the item name.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Description</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Quantity</label>
			    <input type="number" class="form-control" id="example" name="qtty">
			  </div>
			  
			  <button type="submit" name="newpdt" class="btn btn-primary">Add to stock</button>
			</form>


			<!-- inserting new product into stock table -->
			<?php
				include("config.php");
				if(isset($_POST['newpdt'])){
					$item=$_POST['item'];
					$desc=$_POST['desc'];
					$qtty=$_POST['qtty'];
				

					$sql = "INSERT INTO stock (`name`, `descri`,`qtty`) VALUES ('$item', '$desc','$qtty')";

					if (mysqli_query($dbconn, $sql)) {
					  echo "Item has been added successfully";
					  echo "<script>window.location.href='stockmanager.php';</script>";
					  //header('Location:managerhome.php');
					  //exit();
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>
				<!-- end of inserting new product to stock table -->
			
		</div>


		<div>
			<form id="addstock" class="addstock" method="post">
				<label for="exampleInputEmail1" class="form-label text-uppercase">Restock item</label>
				<div class="" style="position: absolute; right: 20px; top: 10px; cursor: pointer;" id="close">X</div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Item name</label>
			    <select name="itmname" style="width: 100%;padding-left: 130px;">
			    	
			    	<?php
			    	include("config.php");
			  			$sqlii="SELECT name FROM stock";
			  			$title=mysqli_query($dbconn,$sqlii);

			            while ($cat = mysqli_fetch_array(
			                                $title,MYSQLI_ASSOC)):;
			        ?>
			        <option value="<?php echo $cat['name'];?>" style="background-color: pink;" >
			        	<?php echo $cat['name'];?>
			        </option>

			        <?php
		              endwhile;
		            ?>
			    </select>
			    <div id="emailHelp" class="form-text">Select the item name.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Description</label>
			    <select name="descri" style="width: 100%;padding-left: 130px;">
			    	
			    	<?php
			    	include("config.php");
			  			$sqlii="SELECT descri FROM stock";
			  			$title=mysqli_query($dbconn,$sqlii);

			            while ($cat = mysqli_fetch_array(
			                                $title,MYSQLI_ASSOC)):;
			        ?>
			        <option value="<?php echo $cat['descri'];?>" style="background-color: pink;" >
			        	<?php echo $cat['descri'];?>
			        </option>

			        <?php
		              endwhile;
		            ?>
			    </select>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Quantity</label>
			    <input type="number" class="form-control" id="exampleInputPassword1" name="qtty">
			  </div>
			  
			  <button type="submit" name="restockform" class="btn btn-primary">Add to stock</button>
			</form>

			<!-- start of restocking product into stock table -->
			<?php
				include("config.php");
				if(isset($_POST['restockform'])){
					$item=$_POST['itmname'];
					$desc=$_POST['desc'];
					$qtty=$_POST['qtty'];
				

					// $sql = "INSERT INTO stock (`name`, `descri`,`qtty`) VALUES ('$item', '$desc','$qtty')";
					$sql="UPDATE stock SET qtty = qtty+'$qtty' WHERE name='$item'";
					

					if (mysqli_query($dbconn, $sql)) {
					  echo "Item has been restocked successfully";
					  echo "<script>window.location.href='stockmanager.php';</script>";
					  //header('Location:managerhome.php');
					  //exit();
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>
				<!-- end of restocking product to stock table -->
		</div>
	</main>
	<script type="text/javascript">
		let container = document.getElementById('container');
		
		
		let add1 = document.getElementById('add');
		let close = document.getElementById('close');
		let addstock = document.getElementById('addstock');
		
		
		let addnew = document.getElementById('addnew');
		let close1 = document.getElementById('close1');
		let addnewproduct = document.getElementById('addnewproduct');

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


		addnew.addEventListener('click',(e)=>{
			e.preventDefault();
			addnewproduct.classList.add('active')
			document.body.classList.add('overflow')
		})

		close1.addEventListener('click',(e)=>{
			e.preventDefault();
			addnewproduct.classList.remove('active')
			document.body.classList.remove('overflow')
		})
	</script>

	
	<script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

	
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#sample').DataTable();
		});
	</script>



	
</body>
</html>