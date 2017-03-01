<?php
		if(empty($_POST["viewInfo"])){
			$title = "Error";
		}
		else{
			$title = $_POST["viewInfo"];
		}
		require_once('head.php');
        echo"<h1>$title</h1>";
        $conn = mysqli_connect('localhost', 'root','password', 'fnf');    
        // View All Member Details
		if($title == "View Member Details"){
			$query = "SELECT * FROM member";
			$result = mysqli_query($conn, $query);
			echo "<table><tr>";
			while ($fieldinfo=mysqli_fetch_field($result)){
				echo "<th>".$fieldinfo->name."</th>";
				}
				echo '</tr>';
				while ($row= mysqli_fetch_assoc($result)){
					echo "<tr>";
					foreach($row as $cell)
						echo "<td>$cell</td>";
					echo "</tr>";
				}
				echo "</table>";
		}
		//View Members with trainers - No ID's
		elseif($title == "View Members & Trainers"){
			$query = "SELECT firstName, lastName, age, trainerName FROM member, trainer WHERE member.trainerID = trainer.trainerID;";
			$result = mysqli_query($conn, $query);
			echo "<table><tr>";
			while ($fieldinfo=mysqli_fetch_field($result)){
				echo "<th>".$fieldinfo->name."</th>";
				}
				echo '</tr>';
				while ($row= mysqli_fetch_assoc($result)){
					echo "<tr>";
					foreach($row as $cell)
						echo "<td>$cell</td>";
					echo "</tr>";
				}
				echo "</table>";
		}
		//View Members with classes and trainers
		elseif($title == "View Members & Class"){
			//Query required below
			$query = "";
			$result = mysqli_query($conn, $query);
			echo "<table><tr>";
			while ($fieldinfo=mysqli_fetch_field($result)){
				echo "<th>".$fieldinfo->name."</th>";
				}
				echo '</tr>';
				while ($row= mysqli_fetch_assoc($result)){
					echo "<tr>";
					foreach($row as $cell)
						echo "<td>$cell</td>";
					echo "</tr>";
				}
				echo "</table>";
		}
		else{
			echo "<h2>You have accessed this page without using a form please try again!</h2>";
		}
        echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>