<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO out_patient (firstname, lastname, location, age, telephone, email, dob)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[location]','$_POST[age]','$_POST[telephone]',
'$_POST[email]', '$_POST[dob]' )";

if (mysqli_query($conn, $sql)) {
  echo "Record Added successfully";
  header("Refresh:3; url=index.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>