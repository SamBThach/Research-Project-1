<!doctype html>
<html lang="en">

	<head>
		<?php
			session_start();
		?>
		<meta charset="utf-8">
		<title> Major Selection Game </title>
		<link rel="stylesheet" type="text/css" href="Research Website.css">
	</head>
	<body>
		<div id ="heading">
			<img src="OIT logo.png" height="67px" width="320px" alt="Oregon Tech Logo" id = "Logo">
			<span id="pageTitle">Computing Major Selection</span>
		</div>
			<form action="Data_Collect.php" method="post">
				<table id="pictureTable">
					<h2 id="question">Please match the images with what major you believe it matches. Hover to enlarge images. Do not leave on "Select" or have duplicate answers.</h2>
					<tr>
						<td>
							<img src="Cybersecurity.png" height="250px" width="400px" alt="Image of Cybersecurity" id ="CybersecurityImage" class = "img">
								<br><br>
							<select name="Cybersecurity" id="Cybersecurity" name="Cybersecurity">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br><br>
						</td>
						<td>
							<img src="Applied Maths.png" height="250px" width="400px" alt="Image of Green Applied Maths" id ="AppliedMathsImage">
								<br><br>
							<select name="Applied Maths" id="Applied Maths" name="Applied_Maths">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<img src="Software Engineering.png" height="250px" width="400px" alt="Image of Software Engineering" id ="SoftwareEngineeringImage">
								<br><br>				
							<select name="Software Engineering" id="Software Engineering" name="Software_Engineering">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br><br>
						</td>
						<td>
							<img src="Embedded Systems.png" height="250px" width="400px" alt="Image of Field With Wind Embedded Systems" id ="EmbeddedSystemsImage">
								<br><br>				
							<select name="Embedded Systems" id="Embedded Systems" name="Embedded_Systems">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<img src="Data Science.png" height="250px" width="400px" alt="Image of a Data Science" id ="DataScienceImage">
								<br><br>			
							<select name="Data Science" id="Data Science" name="Data_Science">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br>
						</td>
						<td>
							<img src="Computer Engineering.png" height="250px" width="400px" alt="Image of a Computer Engineering" id ="ComputerEngineeringImage">
								<br><br>			
							<select name="Computer Engineering" id="Computer Engineering" name="Computer_Engineering">
								<option value="unselected">Select</option>
								<option value="Cybersecurity">Cybersecurity</option>
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Applied Maths">Applied Maths</option>
								<option value="Software Engineering">Software Engineering</option>
								<option value="Embedded Systems">Embedded Systems</option>
								<option value="Data Science">Data Science</option>
							</select>
								<br>
						</td>
					</tr>
					<tr>
						<td id = submitButton>
							<input type="submit" value="Submit"  id = "button">
							
						</td>
					</tr>
					<tr>
						<td>
						<p id="error"></p>
						</td>
					</tr>
				</table>
			</form>
	</body>
	
</html>
