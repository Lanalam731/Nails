<?php

$servername = "localhost:3306";
$dBUsername = "mahs_llam";
$dBPassword = "mustangs";
$dBName = "mahs_llam";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}