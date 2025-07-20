<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loveform";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];

$sql = "INSERT INTO answers (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10)
VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank You! 💖 Answers Submitted.</h2>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
