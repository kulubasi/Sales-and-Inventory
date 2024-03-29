
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
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css">

	<style type="text/css">
		a{ text-decoration: none; color: white; }
		#card{
			color:red;

		}
		#show_income, #show_expenses, #addit, #adde{
		cursor: pointer;
		font-weight: bold;
		color: cyan;
		}
		.card-body:hover{
			cursor: pointer;
			background-color: pink;

		}
		
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
			  	<button class="btn btn-primary" type="button" id="button-addon2"name="btn_search"><i class="bi bi-search"></i></button>
			</div>

			<!-- WORKING ON SEARCH FORM -->
  // <?php
//  include("config.php");
//  if(isset($_POST['btn_search'])){
// 		$name = $_post['search'];
//     //$query = "SELECT * FROM employees
//    // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

// 		$result = mysqli_query($dbconn, "SELECT * FROM income
// 		WHERE items LIKE '%{$name}%' OR Amount LIKE '%{$name}%'");

// 		while ($row = mysqli_fetch_array($result))
// 	        {
// 			echo'<table>';
// 			echo'<tr>';
// 			echo'<td>';
// 			echo $row['items'] . " " . $row['Amount'];
// 			echo'</td>';
// 			echo "<br>";
// 			echo'</tr>';
// 			echo'</table>';
// 	               }
// 		mysqli_close($dbconn);}
  //  ?> 

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
	  				<span id="dashboard1">Dashboard</span>
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
			<div id="gencards" class="gencards">
			<div class="row">
				<div class="col" >
					<div class="card bg-light mb-3 h-100" id="card" >
						<!-- <div class="card-header text-center" >Income</div> -->
						  <div class="card-body">
						    <!-- <h5 class="card-title">View Users</h5> -->
						    <p class="card-text text-success text-center addit" id="addit"> <i class="bi bi-currency-dollar"><br>Take transaction.</i></p>
						  </div>
					</div>
				</div>

				<div class="col">
					<div class="card bg-light mb-3 h-100" >
						<!-- <div class="card-header text-center">Expenditures</div> -->
						  <div class="card-body">
						    <!-- <h5 class="card-title">Primary card title</h5> -->
						    <p class="card-text text-success text-center adde" id="adde"><i class="bi bi-cash-stack"> <br>Record Expenses.</i></p>
						  </div>
					</div>
				</div>
			</div>
				<br>

				<!-- Adding more cards -->

				<div class="cards1" id="cards1">
				<div class="row">
					<div class="col" >
						<div class="card bg-light mb-3 h-100"  >
							<!-- <div class="card-header text-center" >Income Transaction</div> -->
							  <div class="card-body">
							    <!-- <h5 class="card-title">View Users</h5> -->
							    <p class="card-text text-success text-center"id="show_income" onclick="clicked_income()"><i class="bi bi-currency-exchange"><br>Show Expenses.</i></p>
							  </div>
						</div>
					</div>


					    <div class="col" id="col">
						<div class="card bg-light mb-3 h-100" >
							<!-- <div class="card-header text-center">Expense Transaction</div> -->
							  <div class="card-body">
							    <!-- <h5 class="card-title">Primary card title</h5> -->
							    <p class="card-text text-success text-center" id="show_expenses" onclick="clicked_expenses()"><i class="bi bi-coin"><br>Show Income Transactions.</i> </p>
							  </div>
						</div>
					</div>
					</div>
				</div>
			</div>


				<!-- Add expense form -->
				<div>

			<form id="addExpense" class="addExpense" method="post">
				<label for="exampleInputEmail1" class="form-label text-uppercase">Record business Expenses</label>
				<div class="" style="position: absolute; right: 20px; top: 10px; cursor: pointer; color: red;" id="close">X</div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Item</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item" required>
			    <div id="emailHelp" class="form-text">Enter the item name.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Description</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="desc" required>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Quantity</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="qtty">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Amount</label>
			    <input type="number" class="form-control" id="example" name="amount" required>
			  </div>
			  
			  <button type="submit" name="newexpense" class="btn btn-primary">Finish record</button>
			</form>
			<?php
				include("config.php");
				if(isset($_POST['newexpense'])){
					$item=$_POST['item'];
					$desc=$_POST['desc'];
					$qtty=$_POST['qtty'];
					$amt=$_POST['amount'];
					$tm=date('d.m.Y H:i:sa', time() + 1 * 60 * 60);
				

					$sql = "INSERT INTO expenses (`item`, `descri`,`amt`,`qtty`,`ct`) VALUES ('$item', '$desc','$amt','$qtty','$tm')";

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

	<!-- End of add expense form -->


	<!-- Start of add income form -->
			<div>
			<form id="addIncome" class="addIncome" method="post">
				<label for="exampleInputEmail2" class="form-label text-uppercase">Record Income</label>
				<?php // echo date('d.m.Y H:i:sa', time() + 1 * 60 * 60); ;?>
				<div class="" style="position: absolute; right: 20px; top: 10px;color: red; cursor: pointer;" id="close2">X</div>
			  <div class="mb-3">
			  	
			    <label for="exampleInputEmail2" class="form-label">Item</label><br>
			    <select name="itm" style="width: 100%;padding-left: 130px;">
			    	
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
			    <!-- <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="itm">
			    <div id="emailHelp" class="form-text">Enter the item name.</div> -->
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword2" class="form-label">Description</label>
			    <input type="text" class="form-control" id="exampleInputPassword2" name="Descri" required>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword2" class="form-label">Amount</label>
			    <input type="number" class="form-control" id="exampleInputPassword2" name="amt" required>
			  </div>

			  <div class="mb-3">
			    <label for="exampleInputPassword2" class="form-label">Quantity</label>
			    <input type="number" class="form-control" id="exampleInputPassword2" name="qtty" required>
			  </div>
			  
			  <button type="submit" name="newincome" class="btn btn-primary">Finish record</button>
			</form>

			<?php
				include("config.php");
				if(isset($_POST['newincome'])){
					$item=$_POST['itm'];
					$descri=$_POST['Descri'];
					$amt=$_POST['amt'];
					$qtty=$_POST['qtty'];
					// $tm=date("d/m/Y h:i:sa");
					$tm=date('d.m.Y H:i:sa', time() + 1 * 60 * 60);
				

					$sql1 = "INSERT INTO income (`items`, `Descript`,`Amount`,`qtty`,`ct`) VALUES ('$item', '$descri','$amt','$qtty','$tm')";
					$sql2="UPDATE stock SET qtty = qtty-'$qtty' WHERE name='$item'";

					if (mysqli_query($dbconn, $sql1)) {
						if (mysqli_query($dbconn, $sql2)){
						  echo "Item has been added successfully";
						  echo "<script>window.location.href='deskoff.php';</script>";
						  //header('Location:managerhome.php');
						  //exit();
					}}
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>

			
         
			
		</div>

	<!-- End of add income form -->
			
		


	<!-- Start of income table -->
		<div class="row tables" id="income">
				<table id="exampletable" class="table table-striped caption-top" style="margin: 20px;">
				  <h4 class="text-center">Your Current Incomes</h4>
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Item</th>
				      <th scope="col">Description</th>
				      <th scope="col">Amount</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Date and Time sold</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php
		            include("config.php");
		            $mydb ="SELECT * FROM  income";
		            $run=mysqli_query($dbconn,$mydb);
		            if(mysqli_num_rows($run) > 0){
		                echo "<div style='font-size:14px;'>"."<b>"."You current income is as  follows"."</b>"."<div>";
		            	$a =0;               
		                while($row=mysqli_fetch_array($run)){
		                    $id =$row[0];
		                    $item=$row[1];
		                    $descri  =$row[2];
		                    $amt =$row[3];
		                    $qtty=$row[4];
		                    $ct=$row[5];
		                    $a+=1;
		                  echo '<tr>';
		                    echo'<td>' . $a.'</td>';
		                    echo'<td>' .$item.'</td>';
		                    echo'<td>' .$descri.'</td>';
		                    echo'<td>' .$amt.'</td>';
		                    echo'<td>' .$qtty.'</td>';
		                    echo'<td>' .$ct.'</td>';
		                    // echo  '<td align="center" > <a title="View Feedback" href="\example\capston\project\look.php?id='.$x.'"  class="btn btn-primary btn-xs  ">  <span ><i class="fas fa-eye"></i></span></a></td>';
		                  echo '</tr>';
		     
		                }
		         
		            }else{
		            echo "<h3 >You have not made sales yet</h3>";
		            }

					
		            ?>

				  </tbody>

				  <?php
					include("config.php");
				//sql query
						$sql = "SELECT  SUM(amount) from income";
						$result = $dbconn->query($sql);
				//display data on web page
					while($row = mysqli_fetch_array($result)){
						echo " <b>Total Amount: ". $row['SUM(amount)']."</b>";
						echo "<br>";
				}
					
					?>
				</table>

			
			</div>

		<!-- end of income table -->



		<!-- Start of expenditure table -->
		<div class="row tables" id="expenses">
				<table id="expensestable" class="table caption-top table-striped" style="margin: 20px;">
				  <h4 class="text-center">Your Current Expenditures</h4>
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Item</th>
				      <th scope="col">Description</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Amount</th>
				      <th scope="col">Date and Time</th>
					  <th scope="col">Operations</th>

				    </tr>
				  </thead>
				  <tbody>
				    <?php
		            include("config.php");
		            $mydb ="SELECT * FROM  expenses";
		            $run=mysqli_query($dbconn,$mydb);
		            if(mysqli_num_rows($run) > 0){
		                echo "<div style='font-size:14px;'>"."<h4>"."You current Expenses are as  follows"."</h4>"."<div>";
		            	$a =0;               
		                while($row=mysqli_fetch_array($run)){
		                    $id =$row[0];
		                    $item=$row[1];
		                    $descri  =$row[2];
		                    $qtty=$row[4];
		                    $amt =$row[3];
		                    $ct=$row[5];
		                    $a+=1;
		                  echo '<tr>';
		                    echo'<td>' . $a.'</td>';
		                    echo'<td>' .$item.'</td>';
		                    echo'<td>' .$descri.'</td>';
		                    echo'<td>' .$qtty.'</td>';
		                    echo'<td>' .$amt.'</td>';
		                    echo'<td>' .$ct.'</td>';
							echo'<td style="display:flex; height:auto;"><button class="btn btn-primary"><a href="update.php?updateid='.$id.'">Update</a></button>
							<button class="btn btn-danger" style="padding-left:20px;"><a href="delete.php?deleteid='.$id.'">Delete</a></button><br><br></td>';
		                    // echo  '<td align="center" > <a title="View Feedback" href="\example\capston\project\look.php?id='.$x.'"  class="btn btn-primary btn-xs  ">  <span ><i class="fas fa-eye"></i></span></a></td>';
		                  echo '</tr>';
		     
		                }
		         
					}else {
		            echo "<h3 >You have not yet spent any income</h3>";
		            }
		                  
		            ?>
				

				  </tbody>

				  <?php
					include("config.php");
				//sql query
						$sql = "SELECT  SUM(amt) from expenses";
						$result = $dbconn->query($sql);
				//display data on web page
					while($row = mysqli_fetch_array($result)){
						echo " <b>Total Expenses: ". $row['SUM(amt)']."</b>";
						echo "<br>";
				}
					
					?>
</table>

				
</div>
			
	
		<!-- end of expednditure table -->

		

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

	<!-- Adding js on show income and expenses -->
	<script>
		let income = document.getElementById('income')
		let expenses = document.getElementById('expenses')
		let show_income = document.getElementById('how_income')
		let show_expenses = document.getElementById('show_expenses')
		let gencards = document.getElementById('gencards')
		let dashboard1 = document.getElementById('dashboard1')

			
		function clicked_income(){
			income.classList.remove('active')
			expenses.classList.add('active')
			expensestable.classList.add('active')
			
			gencards.classList.add('active')
		}

		function clicked_expenses(){
			income.classList.add('active')
			expenses.classList.remove('active')
			exampletable.classList.add('active')
			gencards.classList.add('active')
			

		}
		dashboard1.addEventListener('click',(e)=>{
			income.classList.remove('active')
			expenses.classList.remove('active')
			expensestable.classList.remove('active')
			exampletable.classList.remove('active')
			gencards.classList.remove('active')
			
		})

	</script>

	<script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


	<script>
		$(document).ready(function () {
		    $('#exampletable').DataTable();
		    responsive: true
		    cellborder: true
		    hover: true

		});

		$(document).ready(function () {
		    $('#expensestable').DataTable();
		    responsive: true

		});
	</script>




</body>
</html>