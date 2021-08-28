<?php
include "dbconnect.php";
$topic = $_POST['topic'];
$place = $_POST['place'];
$date = $_POST['date_and_time'];
$caption = $_POST['caption'];
$perpetrators = $_POST['perpetrators'];


$sql = "INSERT INTO post (topic, place, date_and_time, caption, perpetrators)
VALUES ('$topic', '$place', '$caption', '$perpetrators')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>