<?php
	$title = $_POST["enrollMember"];
    require_once('head.php');
	echo "<body>";
        echo"<h1>$title</h1>";
	
        echo "<br><a href='index.php'>Continue</a>";
    echo "</body>";
    echo "</html>";
?>