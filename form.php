<?php

if (isset($_POST['submit'])) {

  include "dbh.php";

  $userName = $_POST['name'];
  $userEmail = $_POST['mail'];

  $sql = "INSERT INTO subscribers(userName, emailUsers) VALUES ('$userName', '$userEmail')";

  if (empty($userName) && empty($userEmail)) {
    header('Location: http://localhost/MyWebsiteDesign?nameoremailnotfilled');
  } 
  else if (empty($userName) && !empty($userEmail)) {
    header('Location: http://localhost/MyWebsiteDesign?namenotfilled');
  }
  else if (!empty($userName) && empty($userEmail)) {
    header('Location: http://localhost/MyWebsiteDesign?emailnotfilled');
  }
  else {
  mysqli_query($conn, $sql);

  header('Location: http://localhost/MyWebsiteDesign?successfullysent');

  }



}