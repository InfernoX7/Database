<?php
//echo "<html>";
	$title = "FitNotFat Database";
	require_once('head.php');
	echo " <h1>$title</h1>";
 echo "</html>";
?>
<body>
	<h2>View All Members Details</h2>
	<form action ="listMembers.php" method="post">
		<input type = "submit" value = 'View Members' name = "viewMembers"><br>
	</form>
	
	<h2>View All Members /w Trainer</h2>
	<form action ="listMembers.php" method="post">
		<input type = "submit" value = 'View Members & Trainers' name = "viewMemTrain"><br>
	</form>
	
	<h2>Add a Trainer</h2>
	<form action = "changeLastName.php" method ="post">
		Name <input type="text" name = "newTrainer"><br>
		<Input type = "submit" value = "Add New Trainer"><br>
	</form>
	
	<h2>Delete a Trainer</h2>
	<form action = "changeLastName.php" method ="post">
		Name <input type="text" name = "delTrainer"><br>
		<Input type = "submit" value = "Delete Trainer"><br>
	</form>
	
	<h2>Change Members Last Name</h2>
	<form action = "changeLastName.php" method ="post">
		First Name <input type="text" name = "fName"><br>
		Last Name <input type="text" name = "lName"><br>
		New Last Name <input type="text" name = "newLName"><br>
		<Input type = "submit" value = "Change Last Name"><br>
	</form>
	
	<h2>Enroll a Member in a Class</h2>
	<form action = "enroll.php" method ="post">
		Member ID <input type="text" name = "memID"><br>
		Class ID <input type="text" name = "classID"><br>
		<Input type = "submit" value = "Enroll"><br>
	</form>
	
	<h2>View All Members /w Class & Trainer</h2>
	<form action ="listMembers.php" method="post">
		<input type = "submit" value = 'View Member & Class' name = "viewMemClass"><br>
	</form>
	
	
</body>