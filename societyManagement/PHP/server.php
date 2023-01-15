<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "soceity_db";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
  
	if (empty($uname)) {
		header("Location:loginPage.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		header("Location: loginPage.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM loginpage WHERE user_id='$uname' AND password ='$pass'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_id'] === $uname && $row['password'] === $pass) {
				
			
				header("Location: index.php");
				exit();
			} else {
                
				header("Location: loginPage.php?error=Invaliduser");
               
				exit();
			}
		} else {
			header("Location: loginPage.php?error=Invalidpassword");
            
			exit();
		}
	}
} 

function societyReg(){
		error_reporting(0);
		$sname= "localhost";
		$unmae= "root";
		$password = "";
		$db_name = "soceity_db";
	$conn = mysqli_connect($sname, $unmae, $password, $db_name);
	if (!$conn) {
		echo "Connection failed!";
	}
	$sname = $_POST['sname'];
	$srno = $_POST['srno'];
    $SAddr = $_POST['SAddr'];
    $pno = $_POST['pno'];
    $d = $_POST['d'];
    $urname = $_POST['urname'];
    $emailAddr = $_POST['emailAddr'];
    $phno = $_POST['phno'];
	$cname = $_POST['cname'];
	$country = $_POST['country'];
	$position = $_POST['position'];

	$temp ="INSERT INTO `signup` (`id`, `Society_Name`, `Society_Registration_No`, `Society_Address`, `Pincode_No`, `Date`, `Your_name`, `Email_Address`, `Phone_No`, `City`, `Country`, `Your_position`) VALUES ('', '$sname', '$srno', '$SAddr', ' $pno', 'd', ' $urname', ' $emailAddr', ' $phno', '$cname', '$country', '$position')";
	$result = mysqli_query($conn, $temp);
	if($result){
		echo "You have successfully registered";
		header( "refresh:4; url=index.php" ); 
		//header("Location://localhost/societyManagement/PHP/index.php");
	}
}
if(isset($_POST['submit']) )
{
    societyReg() ;  
}

?>

