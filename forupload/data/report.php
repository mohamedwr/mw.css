<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  require("connect.php");
  
  $lastid = 0;

  $result = $conn->query("SELECT id FROM reports ORDER BY id DESC");

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
      $lastid = $row["id"];
      break;
    }
  }

  $id = $lastid + 1;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST['type'];
  $msg = $_POST['desc'];

  $sql = "INSERT INTO reports (id, name, email, type, description)
  VALUES ('$id', '$name', '$email', '$sub', '$msg');";
  
  echo '<title>MW.CSS | Report</title>';
  echo '<link rel="stylesheet" href="../css/all.min.css">';
  echo '<link rel="stylesheet" href="../css/mw.css">';
  echo '<link rel="icon" href="../images/favicon.ico">';
  
  if ($conn->query($sql) === TRUE) {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-check h1 txt-green"></i><br><br>Done.. Bug Sent - <a href="../report.html" class="btn btn-green">Back</a></div>';
  } else {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-bug h1 txt-red"></i><br><br>FAILED - <a href="../report.html" class="btn btn-red">Back</a></div>';
  }
  
} else {
  
  header("Location: ../report.html");
  
}