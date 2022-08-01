<?php
    include "../DbContext.php";

    $taskName = $_GET["name"];

    $query = "DELETE FROM `tasks` WHERE Name = '{$taskName}'";

    if(mysqli_query($connectionString, $query)){
        header("Location: Tasks.php");
    }
?>