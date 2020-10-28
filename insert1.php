<?php
    $conn = new mysqli("remotemysql.com", "wvvSCTqkrf", "mHTNFgQETC", "wvvSCTqkrf", "3306");
    $sql = "INSERT INTO `autorzy`(`id_autor`, `autor`) VALUES (NULL , '".$_POST['autor']."') ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>