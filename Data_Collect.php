<html>
<?php 		
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	include("Credentials.php");
		
	if(!$connection)
	{
			echo "No connection";
			header("Location: Data_Collect_Error.html");
			exit();
	}
	else
	{
		$Input_One = $_POST['Cybersecurity'];
		$Input_Two = $_POST['Applied_Maths'];
		$Input_Three = $_POST['Software_Engineering'];
		$Input_Four = $_POST['Embedded_Systems'];
		$Input_Five = $_POST['Data_Science'];
		$Input_Six = $_POST['Computer_Engineering'];
		$Time_Stamp = date('Y-m-d H:i:s');
		
		$_SESSION['input1'] = $Input_One;
		$_SESSION['input2'] = $Input_Two;
		$_SESSION['input3'] = $Input_Three;
		$_SESSION['input4'] = $Input_Four;
		$_SESSION['input5'] = $Input_Five;
		$_SESSION['input6'] = $Input_Six;
		
		if($Input_One != $Input_Two && $Input_One != $Input_Three && $Input_One != $Input_Four &&
		   $Input_One != $Input_Two && $Input_One != $Input_Six &&
		   $Input_Two != $Input_Three && $Input_Two != $Input_Four && $Input_Two != $Input_Five && 
		   $Input_Two != $Input_Six && 
		   $Input_Three != $Input_Four && $Input_Three != $Input_Five && $Input_Three != $Input_Six && 
		   $Input_Four != $Input_Five && $Input_Four != $Input_Six && 
		   $Input_Five != $Input_Six && 
		   $Input_One != "Select" && $Input_Two != "Select" && $Input_Three != "Select" && 
		   $Input_Four != "Select" && $Input_Five != "Select" && $Input_Six != "Select"){
			   
			$sql = "INSERT INTO user_inputs(Input1,Input2,Input3,Input4,Input5,Input6,Timestamp) VALUES('$Input_One','$Input_Two','$Input_Three','$Input_Four','$Input_Five','$Input_Six','$Time_Stamp')";
			   
			if(!mysqli_query($connection,$sql))
			{
				echo 'Values Not Collected';
				echo date('Y-m-d H:i:s');
				header("Location: Data_Collect_Error.html");
				exit();
			}
			else
			{
				header("Location: Submitted_page.php");
				exit();
			}
		}
		else{
			header("Location: Errored_Research_Page.php");
		}										

	}														
?>
</html>
