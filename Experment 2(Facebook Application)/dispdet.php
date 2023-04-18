
<?php 
  session_start();
$host='localhost';
$conn=mysqli_connect($host,'root','','test1');
$person_name = $_SESSION['user'];
$sql = "SELECT * FROM reg WHERE f_name = '$person_name'";
$files=glob("img/.");
$result = mysqli_query($conn, $sql);
mysqli_query($conn,$sql);
if (mysqli_connect_error()){
    die('connection failed');
}
mysqli_close($conn);
?>
<table align=center cellspacing=0 cellpadding='10' style="color: darkblue; font-size:30px"> 
<?php
while ($row = mysqli_fetch_assoc($result)) 
{
    echo '<br><br>';
    echo '<tr><td><img src="' . $row['imagess'] . '"align=justify alt="User Image" width="300" height=200"><br></tr></td>';
    echo "<tr><td> Name: " . $row["f_name"] . "</td></tr>";
    echo "<tr><td> Email id: ". $row["Email"] . "</td></tr>";
    echo "<tr><td> Password: ". $row["u_password"] . "</td></tr>";
    echo "<tr><td> Gender: ". $row["Gender"] . "</td></tr>";
    echo "<tr><td> Branch: ". $row["Branch"] . "</td></tr>";
    echo "<tr><td> Religion: ". $row["Religion"] . "</td></tr>";
    echo "<tr><td>";
}
?>
</table>
<html>
  <style>
    body{
      background-size:cover;
    }
    img{
      margin-left:45px;
    }
    </style>
  <body background="f.jpg">
</body>
</html>