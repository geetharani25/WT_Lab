<?php
$host='localhost';
$conn=mysqli_connect($host,'root','','test1');
if (!$conn){
    die('Connection failed:'.mysqli_connect_error());
}
$n=$_POST["nm"];
$e=$_POST["eid"];
$p=$_POST["pwd"];
$db=$_POST["dob"];
$bran=$_POST["br"];
$ge=$_POST["gen"];
$r=$_POST["rel"];
$l=$_POST["lan"];
$a=$_POST["ar"];
$imtemp=$_FILES['image']['tmp_name'];
$imname=$_FILES['image']['name'];
$imtype=$_FILES['image']['type'];
$file_sep=explode('.',$imname);
$file_ext=strtolower($file_sep[1]);
$ext=array('jpeg','jpg','png','gif');
if(in_array($file_ext,$ext)){
    $uploadimg='img/'.$imname;
    move_uploaded_file($imtemp,$uploadimg);

$sql="INSERT INTO reg(f_name,Email,u_password,Gender,Branch,Religion,Lnguage,imagess) VALUES ('$n','$e','$p','$ge','$bran','$r','$l','$uploadimg')";
if(mysqli_query($conn,$sql))
{
    header('Location:login.html');}
else{
    echo'Error ading record to table:'.mysqli_error($conn);
}}
else{
echo"Error adding record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>