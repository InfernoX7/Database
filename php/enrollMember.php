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
		if($title = "Enroll With ID"){
			if(empty($_POST['memID']))
				echo "<h2>You must enter a member ID</h2>";
			else if (empty($_POST['classID']))
				echo "<h2>You must enter a class ID</h2>";
			else{
				$memID = $_POST['memID'];
				$classID = $_POST['classID'];
				//Query required below
				$query = "";
				mysqli_query($conn, $query);
				if(mysqli_affected_rows($conn)>0){
					echo "<h2>!Edit text here!</h2>";
				}
				else
					echo "<h2> No records changed </h2>";
				mysqli_close($conn);
			}						
		}
		//Enroll with Name
		elseif($title == "Enroll With Name"){
			if(empty($_POST['memID']))
					echo "<h2>You must enter a member ID</h2>";
				else if (empty($_POST['classID']))
					echo "<h2>You must enter a class ID</h2>";
				else{
					$memID = $_POST['memID'];
					$classID = $_POST['classID'];
					//Query required below
					$query = "INSERT INTO enrolment (enrolmentID, memberID, classID) VALUES (NULL, 
EXISTS (SELECT memberID FROM member WHERE firstName ="First Name" AND lastName ="Last Name"),
EXISTS (SELECT classID FROM _class WHERE className ="Class Name"))";
					mysqli_query($conn, $query);
					if(mysqli_affected_rows($conn)>0){
						echo "<h2>!Edit text here!</h2>";
					}
					else
						echo "<h2> No records changed </h2>";
					mysqli_close($conn);
				}						
		}
        echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>