<?php 
    session_start();
    $namm=$_SESSION['user'];
    $lk=0;
    $con=mysqli_connect("localhost","root","","test1");
    $imtemp=$_FILES['photo']['tmp_name'];
    $imname=$_FILES['photo']['name'];
    $imtype=$_FILES['photo']['type'];
    $file_sep=explode('.',$imname);
    $file_ext=strtolower($file_sep[1]);
    $ext=array('jpeg','jpg','png','gif');
    
    if(in_array($file_ext,$ext)){
        $uploadimg='img/'.$imname;
        $sql = "INSERT INTO imagestable (image, likes, users) VALUES ('$uploadimg', '$lk', '$namm')";
        $res=mysqli_query($con,$sql);
    
        if(move_uploaded_file($imtemp, $uploadimg)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type.";
    }
?>