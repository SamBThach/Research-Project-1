<html>
<?php 		
	$host = "127.0.0.1";
	$username = "root";
	$password = "";
	
	$connection = mysqli_connect($host, $username, $password, "research");
	
	if(!$connection){
		echo "No connection";
	}
	if(!mysqli_select_db($connection, "research")){
		echo "No database";
	}
	
	$Input_One = $_POST['Cybersecurity'];
	$Input_Two = $_POST['Applied_Maths'];
	$Input_Three = $_POST['Software_Engineering'];
	$Input_Four  = $_POST['Embedded_Systems'];
	$Input_Five  = $_POST['Data_Science'];
	$Input_Six  = $_POST['Computer_Engineering'];
	$Time_Stamp = date(DATE_RFC2822);
						
	echo $Input_One;
	echo $Input_Twp;
	echo $Input_Three;
	echo $Input_Four;
	echo $Input_Five;
	echo $Input_Six;
	echo $Time_Stamp;
	
		$sql = "INSERT INTO user_inputs(Input1,Input2,Input3,Input4,Input5,Input6,Timestamp) VALUES('$Input_One','$Input_Two','$Input_Three','$Input_Four','$Input_Five','$Input_Six','$Time_Stamp')";
		
		if(!mysqli_query($connection,$sql)){
			echo 'Values Not Collected';
		}
		else{
			echo 'Values Collected';
			echo date(DATE_RFC2822);
		}
		header("Location: Submitted Page.html");
		exit();
?>
</html>