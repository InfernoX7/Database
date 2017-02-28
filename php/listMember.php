<?php
	$title=$_POST["viewMembers"];
    require_once('head.php');

    echo "<body>";
        echo"<h2>$title</h2>";
        $conn = mysqli_connect('localhost', 'root','password', 'fnf');    
        if($_POST["viewMembers"] == "View Member Details"){
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
		elseif($_POST["viewMembers"] == "View Members & Trainers"){
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
		elseif($_POST["viewMembers"] == "View Members & Class"){
			//Query goes below
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
			echo "You have accessed this page without using a form please try again!";
		}
        echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>