<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

require('connect.php');

$table = $_POST['table'];

$id = $_POST['id'];

$sql = "DELETE FROM $table WHERE id='$id'";
  
  echo '<title>Connection Error!</title>';
  echo '<link rel="stylesheet" href="../css/all.min.css">';
  echo '<link rel="stylesheet" href="../css/mw.css">';
  echo '<link rel="icon" href="images/favicon.ico">';
  echo '<br>';

if ($conn->query($sql) === TRUE) {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-check h1 txt-green"></i><br><br>Done.. Object Deleted - <a href="../control.php" class="btn btn-green">Back</a></div>';
} else {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-bug h1 txt-red"></i><br><br>FAILED - <a href="../control.php" class="btn btn-red">Back</a></div>';
}

} else{
    header("Location: ../index.php");
}