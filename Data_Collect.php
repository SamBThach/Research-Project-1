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
	$Input_Four = $_POST['Embedded_Systems'];
	$Input_Five = $_POST['Data_Science'];
	$Input_Six = $_POST['Computer_Engineering'];
	$Time_Stamp = date(DATE_RFC2822);
	
	if(			  $Input_One != $Input_Two && $Input_One != $Input_Three && $Input_One != $Input_Four && $Input_One != $Input_Five && $Input_One != $Input_Six
				&&$Input_Two != $Input_Three &&$Input_Two != $Input_Four && $Input_Two != $Input_Five && $Input_Two != $Input_Six 
				&&$Input_Three != $Input_Four &&$Input_Three != $Input_Five && $Input_Three != $Input_Six 
				&&$Input_Four != $Input_Five && $Input_Four != $Input_Six 
				&&$Input_Five != $Input_Six
				&&$Input_One != "unselected" && $Input_Two != "unselected" && $Input_Three != "unselected" 
				&&$Input_Four != "unselected" && $Input_Five != "unselected"&&$Input_Six != "unselected"){
					
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
	}
	else{
		header("Location: Errored_Research_Page.html");
		echo "Error, left on default or conflicting inputs";
		exit();
	}
?>
</html>