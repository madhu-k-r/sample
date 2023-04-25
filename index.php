<!DOCTYPE html>
<html>
<head>
<title>simple form </title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<center>
<h1>Enter the details</h1>
<form action="insert.php" method="POST">   
<table>   
<tr><td>Name:</td><td> <input type="text" name="name" required="required"  class="input1"/></td></tr>  
<tr><td>Age:</td><td> <input type="number" name="age"required="required" class="input1"/></td></tr>  
<tr><td>Company Name:</td><td> <input type="text" name="companyname" required="required" class="input1"/></td></tr>  
</table>  
<a href="fetch.php"><input type="button" value="Fetch" class="Fetch"/></a>
<input type="reset" value="Reset" class="reset" />
<input type="submit" value="Submit" class="submit"/>  
</form>
</center>
</center>
</body>
</html>
