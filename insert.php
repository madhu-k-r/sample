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

		$conn = new mysqli($dbhost, $dbuser, $dbpwd, "sample_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		$companyname = $_REQUEST['companyname'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sample_db VALUES ('$name',
			'$age','companyname')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully.</h3>";

			echo nl2br("\n$name\n $age\n "
				. "$companyname\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
