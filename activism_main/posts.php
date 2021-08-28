<?php

include "dbconnect.php";
$topic = $_POST['topic'];
$place = $_POST['place'];
$date = $_POST['date'];
$caption = $_POST['caption'];
$perpetrators = $_POST['perpetrators'];
  
$sql = "INSERT INTO post (topic, place, date, caption, perpetrators)
VALUES ('$topic', '$place','$date', '$caption', '$perpetrators')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
 


