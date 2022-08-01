<?php
    include "../DbContext.php";

    $projectName = $_GET["name"];

    $query = "SELECT * FROM `projects` WHERE Name = '{$projectName}'";
    $result = mysqli_query($connectionString, $query);
    $project = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $projectId = $project[0]["Id"];

    if (isset($_POST["Submit"])) {
        $TaskName = filter_input(INPUT_POST, "TaskName", FILTER_SANITIZE_SPECIAL_CHARS);
    
        if (!empty($TaskName)) {
            $sql = "INSERT INTO tasks (Name, ProjectId) VALUES ('$TaskName', '$projectId')";
    
            if (mysqli_query($connectionString, $sql)) header("Location: Projects.php");
        }
    }
?>

<form method="POST">
    <div>
        <label for="Name">TaskName: </label>
        <input type="text" name="TaskName"></input><br>

        <button type="submit" name="Submit">Submit</button>
    </div>
</form>
