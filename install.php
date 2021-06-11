<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  if($_POST['pass'] === '@admin000@'){
    
    require('data/connect.php');
    
    $progress = '';

    $msg = "CREATE TABLE msg (
    id INT(11),
    name VARCHAR(255),
    email VARCHAR(255),
    title VARCHAR(255),
    msg TEXT(65535)
    )";

    if ($conn->query($msg) === TRUE) {
      $progress .= "Table msg created successfully<br>";
    } else {
      $progress .= "<br>Error creating table msg: " . $conn->error;
    }
    
    $news = "CREATE TABLE news (
    id INT(11),
    title VARCHAR(255),
    pdate VARCHAR(255),
    description TEXT(65535)
    )";

    if ($conn->query($news) === TRUE) {
      $progress .= "Table news created successfully<br>";
    } else {
      $progress .= "<br>Error creating table news: " . $conn->error;
    }
    
    $reports = "CREATE TABLE reports (
    id INT(11),
    name VARCHAR(255),
    email VARCHAR(255),
    type VARCHAR(255),
    description TEXT(65535)
    )";

    if ($conn->query($reports) === TRUE) {
      $progress .= "Table reports created successfully<br>";
    } else {
      $progress .= "<br>Error creating table reports: " . $conn->error;
    }
    
    $votes = "CREATE TABLE votes (
    id INT(11),
    name VARCHAR(255),
    email VARCHAR(255),
    opin TEXT(65535)
    )";

    if ($conn->query($votes) === TRUE) {
      $progress .= "Table votes created successfully<br>";
    } else {
      $progress .= "<br>Error creating table votes: " . $conn->error;
    }
    
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>MW.CSS | Install</title>
    <?php require('layout/head.html'); ?>
  </head>
  <body>
    <?php require('layout/navbar.html'); ?>
    <div class="main collapse collapse-w margin-1 space-22" style="display: block; margin-bottom: 20px;">
      <div class="txt-center">
        <div class="report">
          <div class="h1">Install</div><br>
          <form method="post" action="install.php">
            <div class="left margin-2 space-20">
              <input class="input input-w space-24" placeholder="Password.." name="pass" type="password" required><br>
            </div>
            <button class="btn btn-outline-green margin-3 space-18" type="submit">Install</button>
            <div class="clearfix"></div>
            <label><?php echo @$progress; ?></label>
          </form>
        </div>
      </div>
    </div>
    <?php require('layout/footer.html'); ?>
  </body>
</html>