<?php

if($perm === 'true'){
  
  require("connect.php");
  
  function bugs(){
    $sql = "SELECT id, name, email, type, description FROM reports ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
      echo '<div class="post-n post-n-w space-22 margin-1">
          <div class="h1 title">
          <form action="data/delete.php" method="post" style="display: inline-block;">
          <input value="reports" name="table" style="display: none;">
          <input value="'.$row['id'].'" name="id" style="display: none;">
          <button class="btn btn-red" type="submit">X</button>
          </form>'.$row['type'].'</div>
          <div class="desc">'.$row['type'].' / '.$row['name'].'</div>
          <hr>
          <div class="content">
            <pre>'.$row['description'].'</pre>
          </div>
        </div>';
    }
  }
  
  function votes(){
    $sql = "SELECT id, name, email, opin FROM votes ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
      echo '<div class="post-n post-n-w space-22 margin-1">
          <div class="h1 title">
          <form action="data/delete.php" method="post" style="display: inline-block;">
          <input value="votes" name="table" style="display: none;">
          <input value="'.$row['id'].'" name="id" style="display: none;">
          <button class="btn btn-red" type="submit">X</button>
          </form>'.$row['name'].'</div>
          <div class="desc">'.$row['email'].'</div>
          <hr>
          <div class="content">
            <pre>'.$row['opin'].'</pre>
          </div>
        </div>';
    }
  }
  
  function msg(){
    $sql = "SELECT id, name, email, title, msg FROM msg ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
      echo '<div class="post-n post-n-w space-22 margin-1">
          <div class="h1 title">
          <form action="data/delete.php" method="post" style="display: inline-block;">
          <input value="msg" name="table" style="display: none;">
          <input value="'.$row['id'].'" name="id" style="display: none;">
          <button class="btn btn-red" type="submit">X</button>
          </form>'.$row['title'].'</div>
          <div class="desc">'.$row['email'].' / '.$row['name'].'</div>
          <hr>
          <div class="content">
            <pre>'.$row['msg'].'</pre>
          </div>
        </div>';
    }
  }
  
  function bugnu(){

    $result = $GLOBALS['conn']->query("SELECT id FROM reports ORDER BY id DESC");

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo $row["id"];
        break;
      }
    }
    
  }
  
  function votenu(){

    $result = $GLOBALS['conn']->query("SELECT id FROM votes ORDER BY id DESC");

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo $row["id"];
        break;
      }
    }
    
  }
  
  function msgnu(){

    $result = $GLOBALS['conn']->query("SELECT id FROM msg ORDER BY id DESC");

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo $row["id"];
        break;
      }
    }
    
  }
  
  
} else {
  header("Location: ../control.php");
}