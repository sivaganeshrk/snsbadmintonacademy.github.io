<?php
	include_once 'dbconnection.php';
	if (mysqli_connect_error()) {
		die("Connection failed in addscore...");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Score | SNS Badminton Academy</title>
	<link rel="stylesheet" type="text/css" href="css/updatescore.css">
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="updatecourt.html">Update Court</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="updatescore.php">Update Score</a>
      			</li>
      		</ul>
  		</div>
	</nav>
	<div class="container-fluid">
			<div class="row-sm-12" style="background-color: #B60000; color:  #ffffff; width: 100%; margin-top: 20px;">
				<center>
					<h2 style="font-size: 50px; letter-spacing: 0.2em; font-family: 'Teko', sans-serif;">Update Score</h2>
				</center>
			</div>
			<div class="row" style="margin-top: 18px;">
				<div class="col-sm-4">
					<div class="card text-center" style="max-width: 20rem;">
						<h5 class="card-header">Court 1</h5>
						<div class="card-body">
							<table style="width: 17rem;">
								<tr>
							<?php
								$courtonequery = "SELECT * FROM livescore WHERE courtno='1';";
								$courtone = $conn->query($courtonequery);
								if (mysqli_num_rows($courtone)>0) {
									while ($cone = mysqli_fetch_assoc($courtone)) {								
										if ($cone['type']=='s') {
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Singles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "</tr>";
										}else{
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Doubles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\">".$cone['playerthree']."</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerfour']."</td>";
											echo "</tr>";
										}
									}
								}
							?>
								<tr>
									<td><input type="text" id="conetone" size="4"></td>
									<td><input type="submit" name="btnconetone" value="Add" onclick="btnconetone()"></td>
									<td><input type="text" id="conettwo" size="4"></td>
									<td><input type="submit" name="btnconettwo" value="Add" onclick="btnconettwo()"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-center" style="max-width: 20rem;">
						<h5 class="card-header">Court 2</h5>
						<div class="card-body">
							<table style="width: 17rem;">
								<tr>
							<?php
								$courtonequery = "SELECT * FROM livescore WHERE courtno='2';";
								$courtone = $conn->query($courtonequery);
								if (mysqli_num_rows($courtone)>0) {
									while ($cone = mysqli_fetch_assoc($courtone)) {								
										if ($cone['type']=='s') {
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Singles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "</tr>";
										}else{
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Doubles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\">".$cone['playerthree']."</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerfour']."</td>";
											echo "</tr>";
										}
									}
								}
							?>
								<tr>
									<td><input type="text" id="ctwotone" size="4"></td>
									<td><input type="submit" name="btnctwotone" value="Add" onclick="btnctwotone()"></td>
									<td><input type="text" id="ctwottwo" size="4"></td>
									<td><input type="submit" name="btnctwottwo" value="Add" onclick="btnctwottwo()"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-center" style="max-width: 20rem;">
						<h5 class="card-header">Court 3</h5>
						<div class="card-body">
							<table style="width: 17rem;">
								<tr>
							<?php
								$courtonequery = "SELECT * FROM livescore WHERE courtno='3';";
								$courtone = $conn->query($courtonequery);
								if (mysqli_num_rows($courtone)>0) {
									while ($cone = mysqli_fetch_assoc($courtone)) {								
										if ($cone['type']=='s') {
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Singles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "</tr>";
										}else{
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Doubles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\">".$cone['playerthree']."</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerfour']."</td>";
											echo "</tr>";
										}
									}
								}
							?>
								<tr>
									<td><input type="text" id="cthreetone" size="4"></td>
									<td><input type="submit" name="btncthreetone" value="Add" onclick="btncthreetone()"></td>
									<td><input type="text" id="cthreettwo" size="4"></td>
									<td><input type="submit" name="btncthreettwo" value="Add" onclick="btncthreettwo()"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 25px;">
				<div class="col-sm-6" align="center">
					<div class="card text-center" style="max-width: 20rem;">
						<h5 class="card-header">Court 4</h5>
						<div class="card-body">
							<table style="width: 17rem;">
								<tr>
							<?php
								$courtonequery = "SELECT * FROM livescore WHERE courtno='4';";
								$courtone = $conn->query($courtonequery);
								if (mysqli_num_rows($courtone)>0) {
									while ($cone = mysqli_fetch_assoc($courtone)) {								
										if ($cone['type']=='s') {
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Singles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "</tr>";
										}else{
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Doubles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\">".$cone['playerthree']."</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerfour']."</td>";
											echo "</tr>";
										}
									}
								}
							?>
								<tr>
									<td><input type="text" id="cfourtone" size="4"></td>
									<td><input type="submit" name="btncfourtone" value="Add" onclick="btncfourtone()"></td>
									<td><input type="text" id="cfourttwo" size="4"></td>
									<td><input type="submit" name="btncfourttwo" value="Add" onclick="btncfourttwo()"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-6" align="center">
					<div class="card text-center" style="max-width: 20rem;">
						<h5 class="card-header">Court 5</h5>
						<div class="card-body">
							<table style="width: 17rem;">
								<tr>
							<?php
								$courtonequery = "SELECT * FROM livescore WHERE courtno='5';";
								$courtone = $conn->query($courtonequery);
								if (mysqli_num_rows($courtone)>0) {
									while ($cone = mysqli_fetch_assoc($courtone)) {								
										if ($cone['type']=='s') {
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Singles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "</tr>";
										}else{
											echo "<td colspan=\"4\" style=\"padding-bottom: 1em;\">Event - Doubles</td>
											</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\">".$cone['playerone']."</td>";
											echo "<td colspan=\"2\">".$cone['playerthree']."</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playertwo']."</td>";
											echo "<td colspan=\"2\" style=\"padding-bottom: 1em;\">".$cone['playerfour']."</td>";
											echo "</tr>";
										}
									}
								}
							?>
								<tr>
									<td><input type="text" id="cfivetone" size="4"></td>
									<td><input type="submit" name="btncfivetone" value="Add" onclick="btncfivetone()"></td>
									<td><input type="text" id="cfivettwo" size="4"></td>
									<td><input type="submit" name="btncfivettwo" value="Add" onclick="btncfivettwo()"></td>
								</tr>
							</table>
						</div>
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
	<script type="text/javascript" src="js/updatescore.js"></script>
</body>
</html>