<?php

if (isset($_POST['submit'])) {

  
  include "dbh.php"

  $userName = $_POST['name'];
  $userEmail = $_POST['mail'];
  $userMsg = $_POST['message'];

  $sql = "INSERT INTO contacts(userName, userEmail, userMessage) VALUES ('$userName', '$userEmail', '$userMsg')";
  
  if (empty($userName) && empty($userEmail) && empty($userMsg)) {
    header('Location: http://localhost/MyWebsiteDesign/contact.html?nameoremailormessagenotfilled');
  } 
  else {
  mysqli_query($conn, $sql);

  header('Location: http://localhost/MyWebsiteDesign/contact.html?successfullysent');

  }



}