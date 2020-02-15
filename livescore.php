<?php
	include_once 'dbconnection.php';
	if (mysqli_connect_error()) {
		die("Connection failed with ".$DATABASE_NAME.", Error:".mysqli_connect_errno());
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Live Score | SNS Badminton Academy</title>
	<link rel="stylesheet" type="text/css" href="css/livescore.css">
	<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<!-- Header -->
	<div class="header">
		<div class="row">
			<div class="col-sm-2">
				<img src="/images/SNSBadmintonAcademyLogo.png" height="100" width="100">
			</div>
			<div class="col-sm-8">
				<center><h1 style="font-family: 'Aldrich', sans-serif; padding-top: 0.6em; text-align: center;">SNS BADMINTON ACADEMY</h1></center>
			</div>
			<div class="col-sm-2">
				<img src="/images/SNS-Institutions-logo.png" height="80" width="100" style="padding-top: 18px; float: right; padding-right: 15px;">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="col"  style="background-color: #B60000; color:  #ffffff; height: auto; width: 100%; margin-top: 20px;">
			<div class="row-sm-12">
				<center><h2 style="font-size: 50px; letter-spacing: 0.2em; font-family: 'Teko', sans-serif;">Live Score</h2></center>
			</div>
		</div>
		<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
			<div class="col-sm-2  offset-sm-1">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 1</li></b>
						<?php
							$getscorequery = "SELECT * FROM livescore WHERE courtno = 1;";
							$getscore = $conn->query($getscorequery);
							if (mysqli_num_rows($getscore)>0) {
								while ($get = mysqli_fetch_assoc($getscore)) {
									$type  = $get['type'];
									if($type == 's'){
											// Single - Up
											echo "<div class=\"scorebackoneup\"></div>";
											echo "<div class=\"playeroneup\">";
											echo "<li style=\"font-size: 18px;\">".$get['playerone']."</li>";
											echo "<li id=\"oneup\" style=\"font-size: 23px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Single - Down
											echo "<div class=\"scorebackonedown\"></div>";
											echo "<div class=\"playeronedown\">";
											echo "<li style=\"font-size: 18px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"onedown\" style=\"font-size: 23px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}else{
											// Doubles - Up
											echo "<div class=\"scorebacktwoup\"></div>";
											echo "<div class=\"playertwoup\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerone']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"oneup\" style=\"font-size: 20px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Doubles - Down
											echo "<div class=\"scorebacktwodown\"></div>";
											echo "<div class=\"playertwodown\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerthree']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playerfour']."</li>";
											echo "<li  id=\"onedown\" style=\"font-size: 20px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}
								}
							}
						?>
					</ul>
				</div>	
			</div>
			<div class="col-sm-2">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 2</li></b>
						<?php
							$getscorequery = "SELECT * FROM livescore WHERE courtno = 2;";
							$getscore = $conn->query($getscorequery);
							if (mysqli_num_rows($getscore)>0) {
								while ($get = mysqli_fetch_assoc($getscore)) {
									$type  = $get['type'];
									if($type == 's'){
											// Single - Up
											echo "<div class=\"scorebackoneup\"></div>";
											echo "<div class=\"playeroneup\">";
											echo "<li style=\"font-size: 18px;\">".$get['playerone']."</li>";
											echo "<li id=\"twoup\" style=\"font-size: 23px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Single - Down
											echo "<div class=\"scorebackonedown\"></div>";
											echo "<div class=\"playeronedown\">";
											echo "<li style=\"font-size: 18px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"twodown\" style=\"font-size: 23px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}else{
											// Doubles - Up
											echo "<div class=\"scorebacktwoup\"></div>";
											echo "<div class=\"playertwoup\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerone']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"twoup\" style=\"font-size: 20px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Doubles - Down
											echo "<div class=\"scorebacktwodown\"></div>";
											echo "<div class=\"playertwodown\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerthree']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playerfour']."</li>";
											echo "<li  id=\"twodown\" style=\"font-size: 20px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}
								}
							}
						?>						
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 3</li></b>
						<?php
							$getscorequery = "SELECT * FROM livescore WHERE courtno = 3;";
							$getscore = $conn->query($getscorequery);
							if (mysqli_num_rows($getscore)>0) {
								while ($get = mysqli_fetch_assoc($getscore)) {
									$type  = $get['type'];
									if($type == 's'){
											// Single - Up
											echo "<div class=\"scorebackoneup\"></div>";
											echo "<div class=\"playeroneup\">";
											echo "<li style=\"font-size: 18px;\">".$get['playerone']."</li>";
											echo "<li id=\"threeup\" style=\"font-size: 23px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Single - Down
											echo "<div class=\"scorebackonedown\"></div>";
											echo "<div class=\"playeronedown\">";
											echo "<li style=\"font-size: 18px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"threedown\" style=\"font-size: 23px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}else{
											// Doubles - Up
											echo "<div class=\"scorebacktwoup\"></div>";
											echo "<div class=\"playertwoup\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerone']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"threeup\" style=\"font-size: 20px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Doubles - Down
											echo "<div class=\"scorebacktwodown\"></div>";
											echo "<div class=\"playertwodown\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerthree']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playerfour']."</li>";
											echo "<li  id=\"threedown\" style=\"font-size: 20px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}
								}
							}
						?>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 4</li></b>
						<?php
							$getscorequery = "SELECT * FROM livescore WHERE courtno = 4;";
							$getscore = $conn->query($getscorequery);
							if (mysqli_num_rows($getscore)>0) {
								while ($get = mysqli_fetch_assoc($getscore)) {
									$type  = $get['type'];
									if($type == 's'){
											// Single - Up
											echo "<div class=\"scorebackoneup\"></div>";
											echo "<div class=\"playeroneup\">";
											echo "<li style=\"font-size: 18px;\">".$get['playerone']."</li>";
											echo "<li id=\"fourup\" style=\"font-size: 23px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Single - Down
											echo "<div class=\"scorebackonedown\"></div>";
											echo "<div class=\"playeronedown\">";
											echo "<li style=\"font-size: 18px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"fourdown\" style=\"font-size: 23px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}else{
											// Doubles - Up
											echo "<div class=\"scorebacktwoup\"></div>";
											echo "<div class=\"playertwoup\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerone']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"fourup\" style=\"font-size: 20px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Doubles - Down
											echo "<div class=\"scorebacktwodown\"></div>";
											echo "<div class=\"playertwodown\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerthree']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playerfour']."</li>";
											echo "<li  id=\"fourdown\" style=\"font-size: 20px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}
								}
							}
						?>
					</ul>
				</div>	
			</div>
			<div class="col-sm-2">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 5</li></b>
						<?php
							$getscorequery = "SELECT * FROM livescore WHERE courtno = 5;";
							$getscore = $conn->query($getscorequery);
							if (mysqli_num_rows($getscore)>0) {
								while ($get = mysqli_fetch_assoc($getscore)) {
									$type  = $get['type'];
									if($type == 's'){
											// Single - Up
											echo "<div class=\"scorebackoneup\"></div>";
											echo "<div class=\"playeroneup\">";
											echo "<li style=\"font-size: 18px;\">".$get['playerone']."</li>";
											echo "<li id=\"fiveup\" style=\"font-size: 23px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Single - Down
											echo "<div class=\"scorebackonedown\"></div>";
											echo "<div class=\"playeronedown\">";
											echo "<li style=\"font-size: 18px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"fivedown\" style=\"font-size: 23px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}else{
											// Doubles - Up
											echo "<div class=\"scorebacktwoup\"></div>";
											echo "<div class=\"playertwoup\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerone']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playertwo']."</li>";
											echo "<li  id=\"fiveup\" style=\"font-size: 20px;\">".$get['totalone']."</li>";
											echo "</div>";
											// Doubles - Down
											echo "<div class=\"scorebacktwodown\"></div>";
											echo "<div class=\"playertwodown\">";
											echo "<li style=\"font-size: 15px;\">".$get['playerthree']."</li>";
											echo "<li style=\"font-size: 15px;\">".$get['playerfour']."</li>";
											echo "<li  id=\"fivedown\" style=\"font-size: 20px;\">".$get['totaltwo']."</li>";
											echo "</div>";
									}
								}
							}
						?>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<div class="row">
			<div class="col-sm-12">
				<p style="padding-top: 0.5em;">SNS Badminton Academy</p>	
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/livescore.js"></script>
</body>
</html>