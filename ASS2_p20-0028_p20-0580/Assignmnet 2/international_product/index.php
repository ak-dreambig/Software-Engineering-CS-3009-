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

echo "WELCOME SHAHERYAR ASHFAQ P20-0128 ";
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


<h1>International Products</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Price</th>
		</tr>
	
		// Set up the API endpoint URL
		$api_url = "http://international-product-service:5000/products";

		// Make a cURL request to the API endpoint to get the products data
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$products_json = curl_exec($ch);
		curl_close($ch);

		// Decode the JSON response from the API into an array of products
		$products = json_decode($products_json, true);

		// Loop through the products and display them in the table
		foreach ($products as $product) {
			echo "<tr>";
			echo "<td>" . $product['id'] . "</td>";
			echo "<td>" . $product['name'] . "</td>";
			echo "<td>" . $product['brand'] . "</td>";
			echo "<td>" . $product['price'] . "</td>";
			echo "</tr>";
		}
		
	</table>
?> 
    
    
    </body>
    
    </html>
    
    
