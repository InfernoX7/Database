<?php
		if(empty($_POST["enrollMember"])){
			$title = "Error";
		}
		else{
				$title = $_POST["enrollMember"];
		}
		require_once('head.php');
        echo"<h1>$title</h1>";
		$conn = mysqli_connect('localhost', 'root','password', 'fnf');
		//Enroll using ID
		if($title == "Enroll With ID"){
			if(empty($_POST['memID']))
				echo "<h2>You must enter a member ID</h2>";
			else if (empty($_POST['classID']))
				echo "<h2>You must enter a class ID</h2>";
			else{
				$memID = $_POST['memID'];
				$classID = $_POST['classID'];
				$query = "INSERT INTO enrolment (enrolmentID, memberID, classID) VALUES (NULL, '${memID}', '${classID}')";
				mysqli_query($conn, $query);
				if(mysqli_affected_rows($conn)>0){
					echo "<h2>You have enroled member with ID $memID into class with ID $classID</h2>";
				}
				else
					echo "<h2> No records changed. Check your IDs! </h2>";
				mysqli_close($conn);
			}						
		}
		//Enroll with Name
		elseif($title == "Enroll With Name"){
			if(empty($_POST['fName']))
					echo "<h2>You must enter a first name</h2>";
				else if (empty($_POST['lName']))
					echo "<h2>You must enter a last name</h2>";
				else if (empty($_POST['className']))
					echo "<h2>You must enter a class name</h2>";
				else{
					$fName = $_POST['fName'];
					$lName = $_POST['lName'];
					$className = $_POST['className'];
					$query = "INSERT INTO enrolment (enrolmentID, memberID, classID) VALUES (NULL, 
								EXISTS (SELECT memberID FROM member 
								WHERE firstName ='${fName}' AND lastName ='${lName}'),
								EXISTS (SELECT classID FROM _class 
								WHERE className ='${className}'))";
					mysqli_query($conn, $query);
					if(mysqli_affected_rows($conn)>0){
						echo "<h2>You have enroled $fName $lName in $className</h2>";
					}
					else
						echo "<h2> No records changed. Check if names are correct! </h2>";
					mysqli_close($conn);
				}						
		}
        echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>