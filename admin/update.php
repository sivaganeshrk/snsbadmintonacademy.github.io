<?php
	include_once 'dbconnection.php';
	$courtno = $_POST['courtno'];
	$score = (int)$_POST['score'];
	$total = $_POST['total'];

	$query = "SELECT ".$total." FROM livescore WHERE courtno='".$courtno."';";
	$update = $conn->query($query);
	if (mysqli_num_rows($update)>0) {
		while ($res = mysqli_fetch_assoc($update)) {
			if ($total == "totalone") {
			 	$score = (int)$res['totalone'] + $score;
			 }elseif ($total == "totaltwo") {
			 	$score = (int)$res['totaltwo'] + $score;
			 }
			 $updatequery = "UPDATE livescore SET ".$total."='".$score."' WHERE courtno='".$courtno."';";	
			if ($conn->query($updatequery)) {}
		}
	}
?>