<?php
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$BRAND = $_POST['BRAND'];
$MODEL = $_POST['MODEL'];
$RATING = $_POST['RATING'];
$REVIEW = $_POST['REVIEW'];
$DECIDE = $_POST['DECIDE'];


if (!empty($NAME) || !empty($EMAIL) || !empty($RATING) || !empty($MODEL) || !empty($REVIEW))
	{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "review";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or 
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

     $INSERT = "INSERT Into con(NAME, EMAIL, BRAND, MODEL , RATING, REVIEW, DECIDE)values('".$NAME."','".$EMAIL."','".$BRAND."' ,'".$MODEL."','".$RATING."','".$REVIEW."','".$DECIDE."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo ' <script type="text/javascript"> alert("DATA SAVED")
		window.history.go(-1);
		</script>';
		
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     $conn->close();
    
} 
?>