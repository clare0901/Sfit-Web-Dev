<?php
$id=$_POST["product-id"];
$n=$_POST["product-name"];
$p=$_POST["product-price"];
$d=$_POST["product-description"];
$query = $_POST["query"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_5";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}


if ($query == 'CREATE') 
{
  $sql="CREATE TABLE product (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, price INT(6) NOT NULL, description VARCHAR(200)NOT NULL)";
  if (mysqli_query($conn, $sql)) 
  {
    echo "New table created successfully";
  }
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if ($query == "ADD") 
{
  $sql = "INSERT INTO product (id, name, price,description) values ('$id', '$n', '$p','$d')";
  if($id == "" || $n == "" || $p == "" || $d== "" )
  {
    echo("Missing Information!");
  }
  else if (mysqli_query($conn, $sql)) 
  {
    echo "New record created successfully";
  }
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
if ($query == "DELETE") 
{
  $sql = "DELETE FROM `product` WHERE id='$id'";
  if($id == "" )
  {
    echo("enter proper id");
  }
  else if (mysqli_query($conn, $sql)) 
  {
    echo "Record deleted successfully";
  }
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
