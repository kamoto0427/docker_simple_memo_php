<?php
  require '../../common/database.php';

  $user_name = $_POST['user_name'];
  $user_email = $_POST['user-email'];
  $user_password = $_POST['user_password'];

  $database_handler = getDatabaseConnection();
?>