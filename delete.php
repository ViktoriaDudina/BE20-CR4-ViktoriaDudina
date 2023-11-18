<?php
    require_once 'components/db_connect.php';

    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * FROM `library` WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
        if($row["picture"] !== "default.png"){
            unlink("assets/$row[picture]");
        }

        $sql = "DELETE FROM `library` WHERE `id` = $id";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
        header("Location: index.php");

        
    }
    else{
        mysqli_close($conn);
        header("Location: index.php");
    }