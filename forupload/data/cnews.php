<?php

require('connect.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $lastid = 0;

  $result = $conn->query("SELECT id FROM news ORDER BY id DESC");

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
      $lastid = $row["id"];
      break;
    }
  }

  $id = $lastid + 1;
  $date = Date('Y-m-d');

  $sql = "INSERT INTO news (id, title, pdate, description)
  VALUES ('$id', '$_POST[title]', '$date', '$_POST[content]')";

  if ($conn->query($sql) === TRUE) {
    echo '<title>MW.CSS | Post Created</title>';
    echo '<link rel="stylesheet" href="../css/all.min.css">';
    echo '<link rel="stylesheet" href="../css/mw.css">';
    echo '<br>';
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-check h1 txt-green"></i><br><br>Done.. Post Created - <a href="../control.php" class="btn btn-green">Back</a></div>';
  } else {
    echo '<title>MW.CSS | Failed</title>';
    echo '<link rel="stylesheet" href="../css/all.min.css">';
    echo '<link rel="stylesheet" href="../css/mw.css">';
    echo '<br>';
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-bug h1 txt-red"></i><br><br>FAILED - <a href="../control.php" class="btn btn-red">Back</a></div>';
  }

} else {
  header("Location: ../control.php");
}
