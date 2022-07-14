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
	<title></title>
</head>
<body>
	<p>welcome bro</p>

	

</body>
</html>