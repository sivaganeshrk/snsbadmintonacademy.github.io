<?php
	include_once 'dbconnection.php';
	$category = $_POST['category'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Fixtures | SNS Badminton Academy</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/fixtures.css">
  <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet"> 
</head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="row">
      <div class="col-sm-2">
        <img src="https://snsbadmintonacademy.000webhostapp.com/images/SNSBadmintonAcademyLogo.png" height="100" width="100">
      </div>
      <div class="col-sm-8">
        <center><h1 style="font-family: 'Aldrich', sans-serif; padding-top: 0.6em; text-align: center;">SNS BADMINTON ACADEMY</h1></center>
      </div>
      <div class="col-sm-2">
        <img src="https://snsbadmintonacademy.000webhostapp.com/images/SNS-Institutions-logo.png" height="80" width="100" style="padding-top: 18px; float: right; padding-right: 15px;">
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
              <a class="nav-link" href="fixtures.html">Fixtures</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="livescore.php">Live Score</a>
            </li>
          </ul>
      </div>
  </nav>

      <!-- Page Content -->
    <div class="container">
      <div align="center">
        <form action="fixtures.php" method="POST">
          <table>
            <tr>
            	<td><h1 class="my-4 text-center text-lg-left">
            	<?php
            	if ($category == 'u10boyssingles' || $category == 'u10girlssingles' || $category == 'u10boysdoubles' || $category == 'u10girlsdoubles') {
            		echo "Under 10";
            	}
            	if ($category == 'u13boyssingles' || $category == 'u13girlssingles' || $category == 'u13boysdoubles' || $category == 'u13irlsdoubles') {
            		echo "Under 13";
            	}
            	if ($category == 'u15boyssingles' || $category == 'u15girlssingles' || $category == 'u15boysdoubles' || $category == 'u15girlsdoubles') {
            		echo "Under 15";
            	}
            	if ($category == 'u17boyssingles' || $category == 'u17girlssingles' || $category == 'u17boysdoubles' || $category == 'u17girlsdoubles') {
            		echo "Under 17";
            	}
            	?>
                </h1></td>
                <td><h1 class="my-4 text-center text-lg-left">
                <?php
                if ($category == 'u10boyssingles' || $category == 'u13boyssingles' || $category == 'u15boyssingles' || $category == 'u17boyssingles') {
                	echo "Boys Singles";
                }
                if ($category == 'u10girlssingles' || $category == 'u13girlssingles' || $category == 'u15girlssingles' || $category == 'u17girlssingles') {
                  echo "Girls Singles";
                }
                if ($category == 'u10boysdoubles' || $category == 'u13boysdoubles' || $category == 'u15boysdoubles' || $category == 'u17boysdoubles') {
                  echo "Boys Doubles";
                }
                if ($category == 'u10girlsdoubles' || $category == 'u13girlsdoubles' || $category == 'u15girlsdoubles' || $category == 'u17girlsdoubles') {
                  echo "Girls Doubles";
                }
                ?>
                </h1></td>
            </tr>
              <tr>
                <td>
                    <select class="form-control" id="category" name="category" style="width: auto; margin:10px;">
                        <optgroup label="Under 10">
                        <option value="u10boyssingles">Under 10 Boys Singles</option>
                        <option value="u10girlssingles">Under 10 Girls Singles</option>
                        <option value="u10boysdoubles">Under 10 Boys Doubles</option>
                        <option value="u10girlsdoubles">Under 10 Girls Doubles</option>
                        <optgroup label="Under 13">
                        <option value="u13boyssingles">Under 13 Boys Singles</option>
                        <option value="u13girlssingles">Under 13 Girls Singles</option>
                        <option value="u13boysdoubles">Under 13 Boys Doubles</option>
                        <option value="u13girlsdoubles">Under 13 Girls Doubles</option>
                        <optgroup label="Under 15">
                        <option value="u15boyssingles">Under 15 Boys Singles</option>
                        <option value="u15girlssingles">Under 15 Girls Singles</option>
                        <option value="u15boysdoubles">Under 15 Boys Doubles</option>
                        <option value="u15girlsdoubles">Under 15 Girls Doubles</option>
                        <optgroup label="Under 17">
                        <option value="u17boyssingles">Under 17 Boys Singles</option>
                        <option value="u17girlssingles">Under 17 Girls Singles</option>
                        <option value="u17boysdoubles">Under 17 Boys Doubles</option>
                        <option value="u17girlsdoubles">Under 17 Girls Doubles</option>
                    </select>
                </td>
                <td><input type="submit" name="submit" value="Go" class="btn btn-primary"></td>
              </tr>
          </table>
        </form>
      </div>

      <div class="row text-center text-lg-left">
      	<?php
			$query = "SELECT * FROM galleryimages WHERE category='".$category."';";
			$getquery = $conn->query($query);
			if (mysqli_num_rows($getquery)>0) {
				while ($get = mysqli_fetch_assoc($getquery)) {
				echo "<div class=\"col-lg-3 col-md-4 col-xs-6\">";
    	      	echo "<a href=\"".$get['link']."\" class=\"d-block mb-4 h-100\">";
        	    echo "<img class=\"img-fluid img-thumbnail\" src=\"".$get['link']."\" width=\"400\" height=\"500\">";
          		echo "</a>";
        		echo "</div>";
				}
			}else{
				echo "<h5>Fixtures will be uploaded soon...</h5>";
			}
		?>
    </div>
</div>

<!-- Footer -->
  <div class="footer">
    <div class="row">
      <div class="col-sm-12">
        
      </div>
    </div>
  </div>
</body>
</html>