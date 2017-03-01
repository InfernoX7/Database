<?php
	$title = "FitNotFat Database";
	require_once('head.php');
	echo "<h1>$title</h1>";
?>
	<table>
	<tr>
	<td>
	<h2>View All Member Details</h2>
	<form action ="viewInfo.php" method="post">
		<input type = "submit" value = 'View Member Details' name = "viewInfo"><br>
	</form>
	</td>
	<td>
	<h2>View All Members /w Trainer</h2>
	<form action ="viewInfo.php" method="post">
		<input type = "submit" value = 'View Members & Trainers' name = "viewInfo"><br>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<h2>Add a Trainer</h2>
	<form action = "editRecord.php" method ="post">
		Name <input type="text" name = "trainerName"><br>
		<Input type = "submit" value = "Add New Trainer" name = "editRecord"><br>
	</form>
	</td>
	<td>
	<h2>Delete a Trainer</h2>
	<form action = "editRecord.php" method ="post">
		Name <input type="text" name = "trainerName"><br>
		<Input type = "submit" value = "Delete Trainer" name = "editRecord"><br>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<h2>Change Members Last Name</h2>
	<form action = "editRecord.php" method ="post">
		First Name <input type="text" name = "fName"><br>
		Last Name <input type="text" name = "lName"><br>
		New Last Name <input type="text" name = "newLName"><br>
		<Input type = "submit" value = "Change Last Name" name = "editRecord"><br>
	</form>
	</td>
	<td>
	<h2>Enroll a Member in a Class (Using IDs)</h2>
	<form action = "enrollMember.php" method ="post">
		Member ID <input type="text" name = "memID"><br>
		Class ID <input type="text" name = "classID"><br>
		<Input type = "submit" value = "Enroll With ID" name = "enrollMember"><br>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<h2>View All Members /w Class & Trainer</h2>
	<form action ="viewInfo.php" method="post">
		<input type = "submit" value = 'View Members & Class' name = "viewInfo"><br>
	</form>
	</td>
	<td>
	<h2>View Payment Details</h2>
	<form action = "viewInfo.php" method ="post">
		First Name <input type="text" name = "fName"><br>
		Last Name <input type="text" name = "lName"><br>
		<Input type = "submit" value = "Veiw Payments" name = "viewInfo"><br>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<h2>Enroll a Member in a Class (Using Names)</h2>
	<form action = "enrollMember.php" method ="post">
		First Name <input type="text" name = "fName"><br>
		Last Name <input type="text" name = "lName"><br>
		Class Name <input type="text" name = "className"><br>
		<Input type = "submit" value = "Enroll With Name" name = "enrollMember"><br>
	</form>
	</td>
	
	<td>
	<h2>View Trainer /w Classes</h2>
	<form action = "viewInfo.php" method ="post">
		Name <input type="text" name = "trainerName"><br>
		<Input type = "submit" value = "View Trainers & Class" name = "viewInfo"><br>
	</form>
	</td>
	</tr>
	</table>
</body>
</html>
