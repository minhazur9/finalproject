<!DOCTYPE html>
<html>
  <head>
    <?php include "head.php"; ?> 
      <?php include "feed.php"; ?>
    <title>The Data Stream</title>
  </head>
  <body>
      <?php include "login.php"; ?>
      <div class="headerbg">
      <img src="paper.png"></div>
     <h1>THE DATA STREAM</h1>
      <div class="menu">
          <?php include "menu.php";?>
      </div>     
      <h2>Technology<p>
          Whats new in the tech world</p>
      <ul class="feed">
          <?php foreach($news_data as $item): ?>
          <li class="info" class="<?php echo $item['type'] ?>">
              <div class="comment">
                <?php include "comments.php";?>
                </div>
              <p><?php echo $item['content']; ?></p>
          </li>
          <?php endforeach; ?>
          </ul>
      </h2>
  </body>
</html>