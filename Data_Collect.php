<html>
<?php 		
	$Input_One = $_POST['Cybersecurity'];
	$Input_Two = $_POST['Applied Maths'];
	$Input_Three = $_POST['Software Engineering'];
	$Input_Four  = $_POST['Embedded Systems'];
	$Input_Five  = $_POST['Data Science'];
	$Input_Six  = $_POST['Computer Engineering'];
	$Time_Stamp = date(DATE_RFC2822);
						
	if($Input_One != $Input_Two || $Input_One != $Input_Three || $Input_One != $Input_Four || $Input_One != $Input_Five || $Input_One != $Input_Six
				|| $Input_Two != $Input_Three ||$Input_Two != $Input_Four || $Input_Two != $Input_Five || $Input_Two != $Input_Six || $Input_Three != $Input_Four
				||$Input_Three != $Input_Five || $Input_Three != $Input_Six || $Input_Four != $Input_Five || $Input_Four != $Input_Six || $Input_Five != $Input_Six
				||$Input_One != "unselected" || $Input_One != "unselected" || $Input_One != "unselected" || $Input_One != "unselected" || $Input_One != "unselected"
				||$Input_Two != "unselected" || $Input_Two != "unselected" || $Input_Two != "unselected" || $Input_Two != "unselected" || $Input_Three != "unselected"
				||$Input_Three != "unselected" || $Input_Three != "unselected" || $Input_Four != "unselected" || $Input_Four != "unselected" || $Input_Five != "unselected"){
		$sql = "INSERT INTO user_answers(User_Answer_One,User_Answer_Two,User_Answer_Three,User_Answer_Four,User_Answer_Five,User_Answer_Six,Time_Stamp) VALUES('$Input_One','$Input_Two','$Input_Three','$Input_Four','$Input_Five','$Input_Six','$Time_Stamp')";
		$myfile = fopen("testfile.txt", "a+");
		if(!mysqli_query($connection,$sql)){
			echo 'Values Not Collected';
		}
		else{
			echo 'Values Collected';
			echo date(DATE_RFC2822);
		}
		header("Location: Submitted Page.html");
		fclose($myfile);
		exit();
	}
	else{
		exit();
	}
?>
</html>