<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sfit-coll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// insert
// $sql = "insert into  student (rollno, firstname, lastname)
// values (22, 'Leez', 'Gonsalves')";

// delete
$sql = "delete from student where firstname='Chris'";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>