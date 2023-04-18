<?php
  session_start();
  if(isset($_SESSION["user"])){
    Session_destroy();
    echo '<center><h1>Are you sure you want to <a href="login.html" target="_blank">Logout</h1></center></a>';
  }
  ?>
  <html>
    <head>
      <style>
        h1{
          color:white;
        }
        </style>
        </head>
    <body bgcolor="blue">
</body>
</html>