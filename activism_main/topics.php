<?php
include "dbconnect.php";
$topic = $_POST['topic'];
$impacts = $_POST['impacts'];
$description = $_POST['description'];


$sql = "INSERT INTO topics (topic, impacts, description)
VALUES ('$topic', '$impacts', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>