<?php
	include_once 'dbconnection.php';
	if (mysqli_connect_error()) {
		die("Connection failed with ".$DATABASE_NAME.", Error:".mysqli_connect_errno());
	}
	$p = $_GET['p'];
	$courtno = $_GET['no'];
	$getscorequery = "SELECT * FROM livescore WHERE courtno = '".$courtno."'";
	$getscore = $conn->query($getscorequery);
	if (mysqli_num_rows($getscore) > 0) {
		while ($get = mysqli_fetch_assoc($getscore)) {
			if ($p == 'up') {
				echo $get['totalone'];
			}elseif ($p == 'down') {
				echo $get['totaltwo'];
			}else{
				echo "Place!!!";
			}
		}
	}
?>