<?php
		if(empty($_POST["editRecord"])){
			$title = "Error";
		}
		else{
			$title = $_POST["editRecord"];
		}
		require_once('head.php');
		echo"<h1>$title</h1>";
		$conn = mysqli_connect('localhost', 'root','password', 'fnf');
		//Add a new trainer
		if($title == "Add New Trainer"){
			if(empty($_POST["trainerName"])){
				echo "<h2>Please enter a trainer name!</h2>";
			}
			else{
				$trainerName = $_POST["trainerName"];
				//Query required below
				$query = "";
				mysqli_query($conn, $query);
				echo "<h2>$trainerName was added to the database!</h2>";
				mysqli_close($conn);
			}
		}
		//Delete a trainer
		elseif($title == "Delete Trainer"){
			if(empty($_POST["trainerName"])){
				echo "<h2>Please enter a trainer name!</h2>";
			}
			else{
				$trainerName = $_POST["trainerName"];
				//Query required below
				$query = "";
				mysqli_query($conn, $query);
				if(mysqli_affected_rows($conn)>0){
					echo "<h2>$trainerName was deleted from the database!</h2>";
				}
				else
					echo "<h2> No records changed </h2>";
				
				mysqli_close($conn);
			}
			
		}
		//Change Last Name provided with original First and Last name
		elseif($title == "Change Last Name"){
			if(empty($_POST['fName']))
				echo "<h2>You must enter a first name</h2>";
			else if (empty($_POST['lName']))
				echo "<h2>You must enter a last name</h2>";
			else if (empty($_POST['newLName']))
				echo "<h2>You must enter a new last name</h2>";
			else{
				$fName = $_POST['fName'];
				$lName = $_POST['lName'];
				$newLName = $_POST['newLName']; 
				//Query required below
				$query = "";
				mysqli_query($conn, $query);
				if(mysqli_affected_rows($conn)>0){
					echo "<h2>$fName $lName changed to $fname $newLName</h2>";
				}
				else
					echo "<h2> No records changed </h2>";
				mysqli_close($conn);
			}
		}
		else{
			echo "<h2>You have accessed this page without using a form please try again!</h2>";
		}
		echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>