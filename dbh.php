<?php

$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'rajsuthan_website';

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}