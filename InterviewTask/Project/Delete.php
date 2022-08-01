<?php
    include "../DbContext.php";

    $projectName = $_GET["name"];

    $query = "DELETE FROM `projects` WHERE Name = '{$projectName}'";

    if(mysqli_query($connectionString, $query)){
        header("Location: Projects.php");
    }
?>