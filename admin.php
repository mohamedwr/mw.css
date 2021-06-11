<?php

session_start();

if(@$_SESSION['pass'] === '@admin000@'){
  header("Location: control.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>MW.CSS | Admin</title>
    <?php require('layout/head.html'); ?>
  </head>
  <body>
    <?php require('layout/navbar.html'); ?>
    <div class="main collapse collapse-w margin-1 space-22" style="display: block; margin-bottom: 20px;">
      <div class="txt-center">
        <div class="report">
          <div class="h1">Admin</div><br>
          <form method="post" action="control.php">
            <div class="left margin-2 space-20">
              <input class="input input-w space-24" placeholder="Password.." name="pass" type="password" required><br>
            </div>
            <button class="btn btn-outline-green margin-3 space-18" type="submit">Go to Control</button>
          </form>
        </div>
      </div>
    </div>
    <?php require('layout/footer.html'); ?>
  </body>
</html>