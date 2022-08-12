<!-- Deleting  -->
<?php
					include("config.php");
					if(isset($_POST['deleteid'])){
						$id=$_GET['deleteid'];
						$sql="DELETE * FROM expenses WHERE id=$id";
						$result=mysqli_query($dbconn, $sql);
						if($result){
							echo 'Data deleted successfully';
							// header('location:deskoff.php');
						}
						else{
                            echo mysqli_error($dbconn);
						}


					}
					
					?>
					<!-- End of delete -->
