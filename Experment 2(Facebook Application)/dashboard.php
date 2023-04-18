<html>
  <head>
    <style>
    h2{
      position: fixed;
    top:30;
    right:10;
  
    }
   h1{
    color:white;
   }
   
  a{
    color:blue;
  }

      </style>
</head>
<body bgcolor="darkblue">
<?php
 session_start();
  if(isset($_SESSION['user'])){
    echo "<center><h1>Hiii ". $_SESSION["user"]."! Welcome</h1></center>";
  }
  else{
   header('Location:login.html');
  }
  ?>
  <h2><a class="a" href="logout.php">Logout</h2>
</body>
</html>