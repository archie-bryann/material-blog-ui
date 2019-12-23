<?php
    if(isset($_GET['id'])){
    $id = htmlspecialchars(htmlentities(mysqli_real_escape_string($conn, $_GET['id'])));
    $sql = "select * from comment1 where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if($queryResult > 0){

    } else {
        header("Location: 404.php");
    }
} 


?>