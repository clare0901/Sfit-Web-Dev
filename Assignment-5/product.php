<?php 
$id = $_POST["product-id"];
$name = $_POST["product-name"];
$price = $_POST["product-price"];
$description = $_POST["product-description"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sfit-product";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into product ( Product_id, Product_name, Product_price, Product_description) values ('$id', '$name', '$price', '$description')";
	
	if(mysqli_query($conn, $sql)){
		echo "New Record Created Successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

?>