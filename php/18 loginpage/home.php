<?php 
  session_start();
  if(!isset($_SESSION["user_id"])){
    header("location:index.php");
  }
 ?>
<html>
  <head>
    <title>PHP MySql Login Logout with Session</title>
    <link rel='stylesheet' type='text/css' href='sstyle.css' >
  </head>
  <body>
  <div style='padding:5px;'>
<div class='msg-success'><h1>Welcome :) <?php echo $_SESSION["user_name"]; 
?></div>
<p ><a href='logout.php' style='font-size:20px;'>Logout</a></p>
</div>
</body>
</html>