<html>
<?php 		

	include("Credentials.php");
	
	if(!$connection){
		echo "No connection";
		header("Location: Errored_Research_Page.html");
		exit();
	}
	else{
		$Input_One = $_POST['Cybersecurity'];
		$Input_Two = $_POST['Applied_Maths'];
		$Input_Three = $_POST['Software_Engineering'];
		$Input_Four = $_POST['Embedded_Systems'];
		$Input_Five = $_POST['Data_Science'];
		$Input_Six = $_POST['Computer_Engineering'];
		$Time_Stamp = date(DATE_RFC2822);
					
		$sql = "INSERT INTO user_inputs(Input1,Input2,Input3,Input4,Input5,Input6,Timestamp) VALUES('$Input_One','$Input_Two','$Input_Three','$Input_Four','$Input_Five','$Input_Six','$Time_Stamp')";
		
		if(!mysqli_query($connection,$sql)){
			echo 'Values Not Collected';
			echo date(DATE_RFC2822);
		}
		header("Location: Submitted Page.html");
		exit();		
	}
?>
</html>