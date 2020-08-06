<!DOCTYPE html>
<html>
  <head>
    <?php include "head.php"; ?> 
    <title>The Data Stream</title>
  </head>
  <body>
      <?php include "login.php"; 
      ?>
      <div class="headerbg">
      <img src="paper.png"></div>
     <h1>THE DATA STREAM</h1>
      <div class="menu">
          <?php include "menu.php";?>
      </div> 
      <h2>
       <?php 
          if(!isset($user)){
              echo "You must sign in to access this page";
          }
          else {
              echo "Welcome " . $user;   
              echo '<p>This page is for your account to be able to to send us feedback</p>
                    <form class="contact">
                    <label for="subject">Subject:</label><br>
                    <input class="subject" type="text" name="subject" method="post"><br><br>
                    <label for="feedback">Feedback:</label><br>
                    <textarea rows="10" cols="70" method="post" name="message"></textarea><br><br>
                    <button class="submit" name="send" method="post">Submit</button>
                    </form>';
              }
          if(isset($_POST['send'])) {
                  $to = "minhazur9@gmail.com";
                  $subject = $_POST['subject'];
                  $msg = $_POST['message'];
                  $msg = wordwrap($msg,70);
                  $headers = "From: Datastream";
                  mail($to,$subject,$msg,$headers);
            }
          ?>
      </h2>
  </body>
</html>