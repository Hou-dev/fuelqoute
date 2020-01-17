<?php
    include_once 'connection.php';
    session_start();

    if(!isset($_SESSION['email']))
    {
      header("Location: ../Login-SignUp/loginPage.php");
      exit();
    }

    $email = $_SESSION['email'];
?>

<?php
	include_once 'connection.php';


	if(isset($_POST['submit'])){
		$first = $_POST['firstname'];
		$last = $_POST['lastname'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zipcode = $_POST['zipcode'];
		$Eemail = $_POST['email'];
		$Profile = $_POST['profile'];
		
		$sqlquery = "SELECT * FROM `profile` WHERE ID_Profile <> '$Profile' AND `Email` = '$Eemail'";
		$retrival = mysqli_query( $con, $sqlquery );
		$num_rows = mysqli_num_rows($retrival);

		$valuelength = max(strlen($first) , strlen($last) , strlen($address) , strlen($state));


		if(empty($first) || empty($last) || empty($address)|| empty($city) || empty($state) || empty($zipcode)){
			header("Location: ./profile.php?profile=empty");
			exit();
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$first) || !preg_match("/^[a-zA-Z ]*$/",$last) || !preg_match("/^[a-zA-Z ]*$/",$city) ) {
			header("Location: ./profile.php?profile=variable");
			exit();

		}
		elseif($valuelength > 20){
			header("Location: ./profile.php?profile=inputlarge");
			exit();
		}
		elseif(!preg_match("/^[0-9]{5}$/",$zipcode)){
			header("Location: ./profile.php?profile=ziplarge");
			exit();
		}

		elseif(!preg_match("/[0-9]/",$zipcode)){
			header("Location: ./profile.php?profile=number");
			exit();
		}
		elseif (!filter_var($Eemail, FILTER_VALIDATE_EMAIL)) {
			header("Location: ./profile.php?profile=email");
			exit();
		}
		elseif($num_rows > 0 ){
			header("Location: ./profile.php?profile=duplicate");
			exit();
		}
		else{
		
			$sql = "UPDATE `profile` 
					SET `LName` = '$last',
					`FName` = '$first',
					`Address` = '$address',
					`City` = '$city',
					`Zipcode` = '$zipcode',
					`ID_State` = '$state'
					WHERE `Email` = '$email'";
			$retval = mysqli_query( $con, $sql );
			header("Location: ./profile.php?profile=success");
		}
	
	}
?>