<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link rel="stylesheet" type="text/css" href="update.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"> 
	  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> 
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/style.css"> My custom css file -->
    <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
 
<?php
				include("config.php");
                $id=$_GET['updateid'];
                $sql="SELECT * FROM expenses WHERE id=$id";
                $results=mysqli_query($dbconn,$sql);
                $row=mysqli_fetch_array($results);
                $item=$row['item'];
                $descri=$row['descri'];
                $amt=$row['amt'];
                $qtty=$row['qtty'];
                

				if(isset($_POST['newexpense'])){
					$item=$_POST['itemid'];
					$descri=$_POST['descriid'];
                    $amt=$_POST['amountid'];
					$qtty=$_POST['qttyid'];
				
					
				

					$sql = "UPDATE expenses SET id='$id', item='$item', descri='$descri', amt='$amt',
                    qtty='$qtty' WHERE id=$id";
                    $result=mysqli_query($dbconn, $sql);
					if($result) {
					  // echo "Table updated successfully";
					 // echo "<script>window.location.href='deskoff.php';</script>";
					  header('location:deskoff.php');
					  //exit();
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
					}

					mysqli_close($dbconn);

				}
				?>

        <!-- End of add expense form -->

 <div class="form-group">
<form id="addExpense" class="addExpense" method="post">
    <label for="exampleInputEmail1" class="form-label text-uppercase"><b>Update business Expenses</b></label>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Item</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="itemid" value="<?php echo htmlspecialchars($item); ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="descriid" required value=<?php echo $descri;?> >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="qttyid" value=<?php echo $qtty;?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Amount</label>
    <input type="number" class="form-control" id="example" name="amountid" value=<?php echo $amt;?>>
  </div>
  
  <button type="submit" name="newexpense" class="btn btn-success">Update</button>
</form>

 </div>

		


  <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

</body>
  </html>

	