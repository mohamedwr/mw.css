<?php

$server = "sql301.epizy.com";

$user = "epiz_22902561";

$pass = "6JNQTJ5qM8IyIwQ";

$db = "epiz_22902561_mw_css";

// Create connection
$conn = @new mysqli($server, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  echo '<title>Connection Error!</title>';
  echo '<link rel="stylesheet" href="css/all.min.css">';
  echo '<link rel="stylesheet" href="css/mw.css">';
  echo '<link rel="icon" href="images/favicon.ico">';
  echo '<br>';
  echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-bug h1 txt-red"></i><br>So Sorry, There Is a problem in the database... Please Visit us later</div>';
  die("");
}