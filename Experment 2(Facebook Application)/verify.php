<?php
  session_start();

 $conn = mysqli_connect("localhost","root","","test1");
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
  $eml=$_POST["eid"];
  $pass=$_POST["pwd"];
  $_SESSION['em']=$eml;
  $_SESSION['pw']=$pass;
  $sql="SELECT * from reg where u_password='$pass' and Email='$eml'";
  $files=glob("img/.");
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)==1){
    while($r=mysqli_fetch_array($res)){
    $_SESSION['user']=$r[0];
   
    }
    header('Location:ind.html');
     }
     else{
      echo "alert('Invalid Email/Password')";
      header('Location:login.html');
     }
?>