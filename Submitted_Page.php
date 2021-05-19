<!doctype html>
<html lang="en">

	<head>
		<?php
		session_start();
		$input_1 = $_SESSION['input1'];
		$input_2 = $_SESSION['input2'];
		$input_3 = $_SESSION['input3'];
		$input_4 = $_SESSION['input4'];
		$input_5 = $_SESSION['input5'];
		$input_6 = $_SESSION['input6'];
		?>
		
		<script type="text/javascript">
			var var1 = "<?php echo $input_1; ?>";
			var var2 = "<?php echo $input_2; ?>";
			var var3 = "<?php echo $input_3; ?>";
			var var4 = "<?php echo $input_4; ?>";
			var var5 = "<?php echo $input_5; ?>";
			var var6 = "<?php echo $input_6; ?>";
		</script>
		<title>Submitted Page </title>
		<link rel="stylesheet" type="text/css" href="Submitted_Page.css">
		<?php include("Research Website.php");?>
	</head>
	<body>
		<div id = "Heading">
			<img src="OIT logo.png" height="67px" width="320px" alt="Oregon Tech Logo" id = "logo">
			<span id = "title">OIT CSET Major Selection Game</span>
		</div>
		<div id= "text">
			<h2 id="thanks"> Thank You For Submitting </h2>
			<p id="score"></p>
			<p id="disclaimer"> Your response has been logged as an anonymous user. </p>
			<p id="timeStamp"></p>
		</div>
		
		<script type="text/javascript">
			var timeStamp = new Date();
			var Formatting = "Your score is: ";
			var Formatting2 = "%"
			var score = getScore(var1,var2,var3,var4,var5,var6);
			var scoreReturn = Formatting.concat(score, Formatting2);
			document.getElementById("score").innerHTML = scoreReturn;
			document.getElementById("timeStamp").innerHTML = timeStamp;
			function getScore(one, two, three, four, five, six){
				var score = 0;
				if(one == "Cybersecurity"){
				score = score + 1;
				}
				if(two == "Applied Maths"){
				score = score + 1;
				}
				if(three == "Software Engineering"){
				score = score + 1;
				}
				if(four == "Embedded Systems"){
				score = score + 1;
				}
				if(five == "Data Science"){
				score = score + 1;
				}
				if(six == "Computer Engineering"){
				score = score + 1;
				}
				score = (score/6.0) * 100;
				score = score.toFixed(2);
				return score;
			}
        </script>
		
	</body>
</html>