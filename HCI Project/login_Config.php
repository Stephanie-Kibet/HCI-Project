<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_NAME','kfc_delivery');
define('DB_PASSWORD', '');

//Connecting to database
$connect=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);

//Checking connection
if($connect===false){
	die("Error:Could not connect to database.".mysqli_connect_error());
}
//initialising the session
session_start();

/*check if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ){
	header("location:home.php");
	exit;
}*/

//define variables
$username=$password="";
$username_error=$password_error="";

//processing form data
if($_SERVER["REQUEST_METHOD"] == "POST"){

	//check if username is empty
	if(empty(trim($_POST["uname"]))){
	$username_error="Please enter user name.";	
	}
	else{
		$username=trim($_POST["uname"]);
	}
	//check if password is empty
	if(empty(trim($_POST["password"]))){
	$password_error="Please enter password.";	
	}
	else{
		$password=trim($_POST["password"]);
	}

	//validating credentials
	if(empty($username_error)&&empty($password_error)){
		//select stmt
		$sql="SELECT id, Username, Password FROM login WHERE Username = ?";
		if($stmt=mysqli_prepare($connect,$sql)){
			//Bind Variables to the stmt
			mysqli_stmt_bind_param($stmt,"s",$param_username);
			//set parameters
			$param_username=$username;
			//Execute prepared stmt
			if(mysqli_stmt_execute($stmt)){
				//store results
				mysqli_stmt_store_result($stmt);
				//Checking Username
				if(mysqli_stmt_num_rows($stmt)==1){
					//Bind result variables
					mysqli_stmt_bind_result($stmt,$id,$username,$password);
					if(mysqli_stmt_fetch($stmt)){
						if(password_verify(password)){
							//if password is correct, start a new session.
							session_start();

							//store data in session
							$_SESSION["loggedin"]=true;
							$_SESSION["id"]=$id;
							$_SESSION["Username"]=$username;

							//redirect to home page
							header("Location:home.php");
						}else{
							//error message for password
							$password_error="The password you entered is invalid.";
						}
					}
				}else{
					//error message for username
					$username_error="No account found with that username.";
				}
			}else{
				echo "Oops! Something went wrong. Please try again later.";
			}
			//closing stmt
			mysqli_stmt_close($stmt);
		}
	}
	//close connection
	mysqli_close($connect);

}



?>
