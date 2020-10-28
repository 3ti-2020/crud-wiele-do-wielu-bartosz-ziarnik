<?php
   $conn = new mysqli("remotemysql.com", "wvvSCTqkrf", "mHTNFgQETC", "wvvSCTqkrf", "3306");
    $sql = "INSERT INTO `tytuly`(`id_tytul`, `tytul`) VALUES (NULL, '".$_POST['tytul']."')";
  
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
    
?>