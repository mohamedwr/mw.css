<?php

$perm = 'true';

require('data/control.php');

session_start();
  
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  if($_POST['pass'] === '@admin000@'){
    
    $_SESSION['pass'] = '@admin000@';
    
  } else {
    
    header("Location: admin.php");
    
  }
  
} else {
  
  if($_SESSION['pass'] === '@admin000@'){
    
    
    
  } else {
    
    header("Location: index.html");
    
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>MW.CSS | Control</title>
    <?php require('layout/head.html'); ?>
  </head>
  <body>
    <?php require("layout/navbar.html"); ?>
    <div class="main collapse collapse-w margin-1 space-22" style="display: block; margin-bottom: 20px;">
      <div class="txt-center">
        <div class="bug">
          <div class="h1">
            <form method="post" action="data/logout.php">
              <button class="btn btn-red" type="submit">Logout</button>
            </form>
          </div>
          <div class="h1">
            <form method="post" action="data/tdelete.php">
              <input value="reports" name="table" style="display: none;">
              <button class="btn btn-red" type="submit">X</button>
            </form>
            Bugs(<?php bugnu(); ?>)
          </div><br>
          <?php bugs(); ?>
        </div>
        <div class="votes">
          <div class="h1">
            <form method="post" action="data/tdelete.php">
              <input value="votes" name="table" style="display: none;">
              <button class="btn btn-red" type="submit">X</button>
            </form>
            Votes(<?php votenu(); ?>)
          </div><br>
          <?php votes(); ?>
        </div>
        <div class="messages">
          <div class="h1">
            <form method="post" action="data/tdelete.php">
              <input value="msg" name="table" style="display: none;">
              <button class="btn btn-red" type="submit">X</button>
            </form>
            Messages(<?php msgnu(); ?>)
          </div>
          <?php msg(); ?>
          <br>
        </div>
        <hr>
        <div class="report">
          <div class="h1">Create a News Post</div><br>
          <form method="post" action="data/cnews.php">
            <div class="left margin-2 space-20">
              <input class="input input-w space-24" placeholder="Title.." name="title" type="text" required>
            </div>
            <div class="right margin-2 space-20">
              <textarea class="input input-w space-24" placeholder="Content.." name="content" required style="resize: vertical;"></textarea>
            </div>
            <button class="btn btn-outline-green margin-3 space-18" type="submit">Create</button>
          </form>
        </div>
      </div>
    </div>
    <?php require('layout/footer.html'); ?>
  </body>
</html>