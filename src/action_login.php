<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/getUsers.php');      // loads the functions responsible for the users table
 
  if (userExists($_POST['username'], $_POST['password'])) // test if user exists
    $_SESSION['username'] = $_POST['username'];            // store the username
 
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>