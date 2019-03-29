<!--
Made by Tim 
-->
<?php include 'php/system.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="animations.js" charset="utf-8"></script>
    <title>Home</title>
  </head>

  <body id="body" onload="ifConnected();connectedMessage()">
    <div class="open" id="open">
      <button type="button" name="button" onclick="onopen()">Start connecting</button>
    </div>

    <?php
    if(!$db->connect_error){
      echo '<div id="connect">Connected</div>';
    } else {
      echo '<div id="connect" style="text-align:center;">Connection failed, try again</div>';
    }
    ?>

    <form method="post" id="form">
      <h1>Connect</h1>
      <input type="text" name="host" placeholder="Host" onkeydown="onkeyhost(body)">
      <input type="text" name="user" placeholder="User" onkeydown="onkeyuser(body)">
      <input type="text" name="pass" placeholder="Password" onkeydown="onkeypass(body)">
      <input type="text" name="database" placeholder="Database(leave empty if none)" onkeydown="onkeydb(body)">
      <input type="submit" name="dbconnect" value="Connect to db">
    </form>

    <form method="post" id="form2">
      <h1>Query</h1>
      <input type="text" name="query" placeholder="Query here" onkeydown="onkeyactive(body)">
      <input type="submit" name="dbquery" value="Execute query">
    </form>

    <?php
    if(!$db->connect_error){
      echo '<div class="disconnect" id="disconnect"><a href="disconnect.php">Disconnect</a></div>';
    }
    ?>

    <div class="footer">
      Made by Tim ✔
    </div>
  </body>
</html>
