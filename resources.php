$sql = "INSERT INTO users (`email`, `fname`,`lname`,`username`,`tel`,`pswd`, `usertype`) VALUES ('$email', '$fname','$lname','$username', '$tel', '$password', '$usertype')";

<!-- if ($username=="" OR $password=="" ){
			$message="Plaese enter username and password!";
    		echo"<script type='text/javascript'>alert('$message');</script>";
			redirect("home.php");
		}  -->




		<!-- $sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' AND type ='".$usertype."'";
			$con = mysqli_query($dbconn,$sql);
			if ($con ==false) {
				echo "Request Failed! Please Try Again;
			}
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
    		}else{
    			$_SESSION['id']=$records['id'];
				$_SESSION['ftname']=$records['firstname'];
				$_SESSION['ltname']=$records['lastname'];
				$_SESSION['mail']   =$records['email'];
				$_SESSION['contact']  =$records['contact'];
				$_SESSION['$username_j']=$username;

				header("location:jobseeker.php");
			}
    		mysqli_close($db);
		}elseif($usertype=="Store keeper"){
			$sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' AND type ='".$usertype."'";
			$con = mysqli_query($db,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
    		}else{
    			$_SESSION['id']=$records['id'];
				$_SESSION['ftname']=$records['firstname'];
				$_SESSION['ltname']=$records['lastname'];
				$_SESSION['mail']   =$records['email'];
				$_SESSION['contact']  =$records['contact'];
				$_SESSION['$username_j']=$username;

				header("location:jobseeker.php");
			}
    		mysqli_close($db);
		}elseif($usertype=="Store keeper"){
			$sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' AND type ='".$usertype."'";
			$con = mysqli_query($db,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
    		}else{
    			$_SESSION['id']=$records['id'];
				$_SESSION['ftname']=$records['firstname'];
				$_SESSION['ltname']=$records['lastname'];
				$_SESSION['mail']   =$records['email'];
				$_SESSION['contact']  =$records['contact'];
				$_SESSION['$username_j']=$username;

				header("location:jobseeker.php");
			}
    		mysqli_close($db);
		}elseif($usertype=="Store keeper"){
			$sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' AND type ='".$usertype."'";
			$con = mysqli_query($db,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
    		}else{
    			$_SESSION['id']=$records['id'];
				$_SESSION['ftname']=$records['firstname'];
				$_SESSION['ltname']=$records['lastname'];
				$_SESSION['mail']   =$records['email'];
				$_SESSION['contact']  =$records['contact'];
				$_SESSION['$username_j']=$username;

				header("location:jobseeker.php");
			}
    		mysqli_close($db); -->

















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