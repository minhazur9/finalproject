<?php

    session_start();
    if (isset($_GET['action']) && $_GET['action'] == '1') {
       unset($_SESSION['username']);
       unset($user);
       header("Location: index.php");
    }
    if(isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    echo "<div class=\"dropdown\">
         <button id=\"loginBox\">Hello $user</button> 
        <ul class=\"dropmenu\">
            <li ><a class=\"menuItem\" onmouseover=\"glow(this)\" onmouseout=\"unGlow(this)\" href=\"account.php\">Account</a></li>
            <li ><a class=\"menuItem\" onmouseover=\"glow(this)\" onmouseout=\"unGlow(this)\" id=\"logout\" href=\"login.php?action=1\">Logout</a></li>
        </ul>
         </div>";
        
    
}
else{
    echo  '<form id="signin" name="login" method="post">
            <input name="user" type="text" id="user" placeholder="username">
            <input type="password" name="pass" id="password" placeholder="password">
            <input type="submit" value="login">
            <form>';
    if (isset($_POST['user']) and $_POST['user'] != "" and $_POST['pass'] == "password"){
        $_SESSION['username'] = $_POST['user'];
        $user = $_POST['pass'];
        unset($_POST['pass']);
        header("Location: index.php");
    }
   
}


?>

<script>
var logged = <?php echo isset($_SESSION["username"]); ?>;

$(document).ready(function() {
    if (logged == 1){
        $(".comment textarea").removeAttr('disabled');
        $(".comment button").removeAttr('disabled');
    }
    
});
</script>