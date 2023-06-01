<!doctype html>

<html>

<head>

	<title>mysql database connectivity test</title>
	
</head>

<body>



 <?php
$servername = "backend-db";
$username = "root";
$password = "root";
$database="mobiles";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "<br> ";
echo "<br> ";

echo "WELCOME: Aimal khan ";
$q= "SELECT * FROM product";
$result=mysqli_query($conn,$q) or die( mysqli_error($conn));
while ($row=mysqli_fetch_array($result))
{
echo "<br> ";
echo "<br> ";
echo "<br> ";
echo $row['id']." ";

echo $row['model']." ";

echo $row['price']." ";
echo "<br> ";

echo "<br> ";

echo "<br> ";

echo "<br> ";




}
?> 
    
    
    </body>
    
    </html>
    
    
