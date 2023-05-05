<?php
$connection = mysqli_connect("localhost:8889", "root", "root", "final_project");
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email= $_POST["email"];
$message = $_POST["message"];

$q1 = "INSERT INTO contact_us(fname,lname,email,message) VALUES ('$firstname', '$lastname','$email','$message')";
if (mysqli_query($connection, $q1)) {
    echo "Connected and saved in Database";
    echo "<br> Firstname: ".$firstname, "<br> Lastname:".$lastname, "<br> Email:".$email, "<br> Message:".$message;
  } else {
    echo "Error: " . $q1 . "<br>" . mysqli_error($connection);
  }
mysqli_close($connection);
?>
