<?php 
    function GetAllProjectAndTasks($connectionString) {
        echo "List of all projects and their tasks";
    echo "<br>";

    $projectQuery = "SELECT * FROM Projects";

    $projectResult = mysqli_query($connectionString, $projectQuery);
    $projects = mysqli_fetch_all($projectResult, MYSQLI_ASSOC);


    echo "<br>";

    if (!empty($projects)) {

            $queryTasks = "SELECT * FROM Tasks";

            $resultTasks = mysqli_query($connectionString, $queryTasks);
            $tasks = mysqli_fetch_all($resultTasks, MYSQLI_ASSOC);

        for ($i = 0; $i < count($projects); $i++) {

            $projectName = $projects[$i]["Name"];
            $projectId = $projects[$i]["Id"];

            echo $projectName;

            for ($j = 0; $j < count($tasks); $j++) {
                if ($tasks[$j]["ProjectId"] == $projectId) {
                    $taskName = $tasks[$j]["Name"];
                    echo "
                    <ol>{$taskName} 
                    <a href='EditTask.php?name={$taskName}'>Edit - </a> 
                    <a href='DeleteTask.php?name={$taskName}'>Delete</a> 
                    </ol>";
                }
            }
            echo "<br>";
        }
    }
    }
?>