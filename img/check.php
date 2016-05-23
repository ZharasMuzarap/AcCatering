<?php
session_start();
include 'connection.php';

$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$people = $_GET['people'];
$date = $_GET['date'];
$time = $_GET['time'];
$plan = $_GET['plan'];
$more = $_GET['more'];

$result = mysql_query("INSERT INTO `message`(`name`, `surname`, `email`, `phone`, `people`, `date`, `time`, `plan`, `plan1`) VALUES ('$name','$surname','$email','$phone','$people','$date','$time','$plan','$more')");
header('location: index.php');

?>
