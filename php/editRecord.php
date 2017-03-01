<?php
	$title = $_POST["editRecord"];
    require_once('head.php');
	echo "<body>";
		echo"<h1>$title</h1>";
		$conn = mysqli_connect('localhost', 'root','password', 'fnf');
		//Add a new trainer
		if($title == "Add New Trainer"){
			if(empty($_POST["trainerName"])){
				echo "<h2>Please enter a trainer name!</h2>";
			}
			else{
				$trainerName = $_POST["trainerName"];
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
				$query = "";
				mysqli_query($conn, $query);
				if(mysqli_affected_rows($conn)>0){
					echo "<h2>$trainerName was deleted from the database!</h2>";
				}
				else
					echo "<p> No records changed </p>";
				
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