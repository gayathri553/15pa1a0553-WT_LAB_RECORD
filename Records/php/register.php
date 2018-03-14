<?php
	if(isset($_POST['sub'])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
  		$rlno = $_POST["rlno"];
		$phno = $_POST["phno"];
		$psw = $_POST["psw"];
		$repsw = $_POST["psw-repeat"];
		$servername = "localhost";
		$username = "root";
		$booksLoaned= 0;
		$password = "Root12#$";
		$dbname = "BookShare";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			echo "$servername $username $password $dbname";
			die("Connection failed: " . $conn->connect_error);
		}
//		echo "$name $email $rollno $phoneNo $booksLoaned $psw";
		$sql = "INSERT INTO `user`(`name`, `email`, `rollno`, `phoneNo`, `booksLoaned`, `password`) VALUES ('$name','$email','$rlno','$phno',$booksLoaned,'$psw')";
		mysqli_query($conn,$sql) or die("Connection failed: here" . mysqli_error($conn));
//	        header('location:login.php');

	}
?>
<!Doctype html>
<html>
	<head>
		<title>Register</title>
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<nav class="navbar navbar-default "  style="background-color: aqua;">
 			<div class="container-fluid">
 				<div class="navbar-header">
        	       			<a class="navbar-brand" href="#">Book Share</a>
        	   		</div>
        	         	<ul class="nav navbar-nav navbar-right">
        	              		<li><a href="login.php">Log In</a></li>
        	         	</ul>
	        	</div>
	 	</nav>
		<form method="POST" action="" style="border:1px solid #ccc">
        		<div class="container">
    				<h1>Sign Up</h1>
    				<p>Please fill in this form to create an account.</p>
    				<hr>
				<label for="name"><b>Name</b></label>
    				<input type="text" placeholder="Enter Name" name="name" required>
    				<label for="email"><b>Email</b></label>
    				<input type="text" placeholder="Enter Email" name="email" required>
				<label for="rlno"><b>RollNo</b></label>
    				<input type="text" placeholder="Enter RollNo" name="rlno" required>    				
				<label for="phno"><b>Phone No</b></label>
    				<input type="text" placeholder="Enter phoneNo" name="phno" required>    			
				<label for="psw"><b>Password</b></label>
    				<input type="password" placeholder="Enter Password" id="password" name="psw" required>
				<label for="psw-repeat"><b>Repeat Password</b></label>
    				<input type="password" placeholder="Repeat Password" id="confirm-password"name="psw-repeat" required>
	 			<label>
      					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    				</label>
    				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    				<div class="clearfix">
      					<button type="button" class="cancelbtn" style="color:white"><a href="index.html">Cancel</a></button>
      					<button type="submit" class="signupbtn" name="sub"vonclick="Validate()">Sign Up</button>
    				</div>
  			</div>
		</form>
            <?php var_dump($_POST);?>
	</body>
	<script>
		function Validate() {
        		var password = document.getElementById("password").value;
        		var confirmPassword = document.getElementById("confirm-password").value;
        		if (password != confirmPassword) {
            			alert("Passwords do not match.");
            			return false;
        		}
        		return true;
    		}
	</script>

</html>
