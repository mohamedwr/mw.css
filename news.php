<?php $perm = "true"; require('data/news.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>MW.CSS | News</title>
    <?php require('layout/head.html'); ?>
  </head>
  <body>
    <?php require('layout/navbar.html'); ?>
    <main class="space-22 margin-1">
      <div class="msg-green txt-center txt-white">
        <?php
        
        if(@$_SESSION['pass'] === '@admin000@'){
          echo '<form method="post" action="data/tdelete.php">
          <input value="news" name="table" style="display: none;">
          <button class="btn btn-red" type="submit">X</button>
        </form>';
        }
        
        ?>
        News
      </div>
      <?php News(); ?>
    </main>
    <script>var news = 'true';</script>
    <?php require('layout/footer.html'); ?>
  </body>
</html>