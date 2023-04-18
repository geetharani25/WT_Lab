<?php

if (isset($_POST['photo'])) {

    $image_id = $_POST['photo'];
    $conn = mysqli_connect('localhost', 'root', '', 'test1');
    if (mysqli_connect_error()) {
        die('connection failed');
    }
    $sql = "UPDATE imagestable SET likes = likes + 1 WHERE image = '$image_id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
$conn=mysqli_connect('localhost',"root","","test1");
$sql = "SELECT * FROM imagestable";
$files=glob("img/.");
$result = mysqli_query($conn, $sql);
if (mysqli_connect_error()){
    die('connection failed');
}
mysqli_close($conn);
?>
<html>
<head>
    <style>
        table {
            color: darkblue;
            font-size: 30px;
        }
        td{
            display:inline-block;
            vertical-align:top;
        }
        img {
            width: 300px;
            height: 200px;
        }
        body{
            background:url("d.jpg");
            background-size:cover;
                }
        h3{
            margin-bottom:5px;
        }
        tr{
            margin-bottom:10px;
        }
    </style>
</head>
<body >
    <table align="center" cellspacing=0 cellpadding='30' >
        <?php
        $counter=0; 
        while ($row = mysqli_fetch_assoc($result)) { 
            if ($counter % 3 == 0) {
                echo '<tr>';
            }
            ?>
                <td>
                    <h3><?php echo $row['users'];?></h3>
                    <img src="<?php echo $row['image']; ?>" alt="User Image">
                    <form action="" method="post">
                        <input type="hidden" name="photo" value="<?php echo $row['image']; ?>">
                        <button type="submit">&#x1F44D <?php echo $row['likes']; ?></button>
                    </form>
                </td>
        <?php 
     $counter++;
     if ($counter % 3 == 0) {
         echo '</tr>';
        } 
     } 
    //  if ($counter % 3 != 0) {
    //     echo '</tr>';
    // }
     ?>
    </table>
</body>
</html>