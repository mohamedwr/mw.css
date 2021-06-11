<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  require("connect.php");
  
  $lastid = 0;

  $result = $conn->query("SELECT id FROM votes ORDER BY id DESC");

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
      $lastid = $row["id"];
      break;
    }
  }

  $id = $lastid + 1;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST['opin'];

  $sql = "INSERT INTO votes (id, name, email, opin)
  VALUES ('$id', '$name', '$email', '$sub');";
  
  echo '<title>MW.CSS | Vote</title>';
  echo '<link rel="stylesheet" href="../css/all.min.css">';
  echo '<link rel="stylesheet" href="../css/mw.css">';
  echo '<link rel="icon" href="../images/favicon.ico">';
  
  if ($conn->query($sql) === TRUE) {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-check h1 txt-green"></i><br><br>Done.. Vote Sent - <a href="../report.html#vote" class="btn btn-green">Back</a></div>';
  } else {
    echo '<div class="collapse collapse-b txt-center h2" style="display: block;"><i class="fas fa-bug h1 txt-red"></i><br><br>FAILED - <a href="../report.html#vote" class="btn btn-red">Back</a></div>';
  }
  
} else {
  
  header("Location: ../about.html#contact");
  
}