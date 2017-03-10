<?php

session_start();
$name = $_SESSION['userName'];

$con = mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());

$active_query	= mysqli_query($con,"SELECT * FROM user WHERE fname= '$name';");
$active_row = mysqli_fetch_array($active_query);// or die(mysqli_errno());

$sql = mysqli_query($con,"UPDATE user SET active=0 WHERE fname='$name'") or die(mysqli_errno());



session_unset();
session_destroy();

header("Location: main.html");

?>