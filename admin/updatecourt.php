<?php
	include_once 'dbconnection.php';
	$no = $_POST['no'];
	$type = $_POST['type'];
	$playerone = $_POST['playerone'];
	$playertwo = $_POST['playertwo'];
	$playerthree = $_POST['playerthree'];
	$playerfour = $_POST['playerfour'];
	$query = "SELECT * FROM livescore WHERE courtno='".$no."';";
	$court = $conn->query($query);
	if (mysqli_num_rows($court)>0) {
		if ($type=='s') {
			$updatequery = "UPDATE livescore SET type='".$type."', playerone='".$playerone."', playertwo='".$playertwo."', playerthree='', playerfour='', totalone='0', totaltwo='0' WHERE courtno='".$no."';";
		}else {
			$updatequery = "UPDATE livescore SET type='".$type."', playerone='".$playerone."', playertwo='".$playertwo."', playerthree='".$playerthree."', playerfour='".$playerfour."', totalone='0', totaltwo='0' WHERE courtno='".$no."';";
		}
	}else{
		if ($tyep=='s') {
			$updatequery = "INSERT INTO livescore(courtno,type,playerone,playertwo,playerthree,playerfour,totalone,totaltwo) VALUES('".$no."','".$type."','".$playerone."','".$playertwo."','','','0','0');";
		}else{
			$updatequery = "INSERT INTO livescore(courtno,type,playerone,playertwo,playerthree,playerfour,totalone,totaltwo) VALUES('".$no."','".$type."','".$playerone."','".$playertwo."','".$playerthree."','".$playerfour."','0','0');";
		}
	}
	if ($conn->query($updatequery)) {
			header('Location: updatecourt.html');
	}else{
	    echo "error";
	}
?>