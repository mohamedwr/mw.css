<?php

if($perm === 'true'){
  
  require("connect.php");
  
  session_start();
  
  function News(){
    if($_SESSION['pass'] === '@admin000@'){
      
      $sql = "SELECT id, title, pdate, description FROM news ORDER BY id DESC";
      $result = $GLOBALS['conn']->query($sql);
      while($row = $result->fetch_assoc()) {
        echo '<div class="post-n post-n-w space-22 margin-1">
            <div class="h1 title">
            <form action="data/delete.php" method="post" style="display: inline-block;">
            <input value="news" name="table" style="display: none;">
            <input value="'.$row['id'].'" name="id" style="display: none;">
            <button class="btn btn-red" type="submit">X</button>
            </form>'.$row['title'].'
            </div>
            <div class="desc">'.$row['pdate'].' / Mohammed</div>
            <hr>
            <div class="content">
              <pre>'.$row['description'].'</pre>
            </div>
          </div>';
      }
      
    } else {
      
      $sql = "SELECT id, title, pdate, description FROM news ORDER BY id DESC";
      $result = $GLOBALS['conn']->query($sql);
      while($row = $result->fetch_assoc()) {
        echo '<div class="post-n post-n-w space-22 margin-1">
            <div class="h1 title">'.$row['title'].'</div>
            <div class="desc">'.$row['pdate'].' / Mohammed</div>
            <hr>
            <div class="content">
              <pre>'.$row['description'].'</pre>
            </div>
          </div>';
      }
      
    }
  }
  
  
} else {
  header("Location: ../news.php");
}