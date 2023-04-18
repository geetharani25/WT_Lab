<html>
<style>
    body{
        background:url("h.jpg");
        background-size:cover;
    }
    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }
    h3{
        color:white;
    }
</style>
<body>
<center><i><h1 style="color:white";>Images with highest likes</h1></i></center>;
</body>
</html>
<div class="image-grid">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'test1');
    if (mysqli_connect_error()) {
        die('connection failed');
    }
    $sql = "SELECT * FROM imagestable ORDER BY likes DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        echo "<div>";
        echo "<p><h3>{$row['users']}</h3></p>";
        echo "<img src='{$row['image']}' alt='User Image' style='width:300px; height:300px;'>";
        echo "</div>";
    }
    ?>
</div>




