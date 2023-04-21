<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class="body1">
	<center>
		<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

		$conn = mysqli_connect($dbhost, "$dbuser", "$dbpwd","sample_db", $dbport);
		
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

$sql = "SELECT * FROM sample_db ORDER BY name";
$result = mysqli_query($con, $sql);

// Fetch all
mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>
	</center>
</body>

</html>




