<!DOCTYPE html>
<html>
<head>

<title>HOME Tech Reviewer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="feedbackform.css">
  <link rel="icon" href="tr1.jpg" type="image/gif" sizes="16x16">
</head>
<body>
<div class="header">
  <h1>TECH-REVIEWER<i class="fa fa-mobile-phone" style="font-size:48px;color:white"></i></h1>
  <p style="font-size:70%;"><u>TECH THAT MATTERS</u></p>
</div>

<nav>
 <div class="topnav" id="myTopnav">
  <a href="http://localhost/rev/website/index.html">Home</a>
  <a href="news.htm" >News</a>
  <a href="About.html" >About Us</a>

  
	<a href="#" class="fa fa-facebook-official" style="float:right;padding: 7px; font-size:24px"></a>
	<a href="#" class="fa fa-git-square" style="float:right;padding: 7px; font-size:24px"></a>
	<a href="#" class="fa fa-instagram" style="float:right;padding: 7px; font-size:24px"></a>
	  
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	<i class="fas fa-bars fa-xs"></i>
  </a>
	</div>
	</nav>  

<br>
<br>
<form class="box" action="feedback.php" method="post">
    <select name="SORT" style="width : 200px; cursor: pointer;" required>
    <option value="times">SORT BY (time)</option>
    <option value="RATING">RATE</option>
    <option value="BRAND">BRAND</option>
    </select>
    <input type="submit" name="skip_Submit" value="Submit">
</form>
<br>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";
$SORT = $_POST['SORT'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($SORT== NULL){
    $SORT="times";
}
$sql = "SELECT NAME, EMAIL, BRAND, MODEL, RATING, REVIEW, times FROM con ORDER BY $SORT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='customers'><tr><th>TIME</th><th>NAME</th><th>EMAIL</th><th>Brand</th><th>Model</th><th>Rating</th><th>Review</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["times"]. "</td><td>" . $row["NAME"]. "</td><td>" . $row["EMAIL"]. "</td><td> " . $row["BRAND"]. "</td> <td> " . $row["MODEL"]. "</td> <td> " . $row["RATING"]. "</td> <td> " . $row["REVIEW"]. "</td></tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}

$conn->close();
?>
<div class="footer">
        <div>	<h3>&copy; 2019 TechReviewer.com <img src="tr1.jpg" width="30px">	<hr STYLE="border: 1px solid white; width:50%;">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
        </div>
      </div>
</body>
</html>