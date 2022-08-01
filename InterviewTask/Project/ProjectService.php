<?php
    function AddProject($connectionString) {
        if (isset($_POST["Submit"])) {
            $Projectname = filter_input(INPUT_POST, "ProjectName", FILTER_SANITIZE_SPECIAL_CHARS);
        
            if (!empty($Projectname)) {
                $sql = "INSERT INTO projects (Name) VALUES ('$Projectname')";
            
                if (mysqli_query($connectionString, $sql)) echo "Project successfully added";
            }
        }
    }

    function GetAllProjects($connectionString) {

    echo "List of currently available projects to add tasks to";
    echo "<br>";

    $query = "SELECT Name FROM projects";
    $result = mysqli_query($connectionString, $query);
    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<br>";

    if (!empty($projects)) {
        for ($index = 0; $index < count($projects); $index++) {

            $name = $projects[$index]["Name"];

            echo "
                <table>
                <tr>
                    <td> {$name} </td>
                    <td> <a href='AddTask.php?name={$name}'>ADD TASK- </a> </td>
                    <td> <a href='Delete.php?name={$name}'>DELETE - </a> </td>
                    <td> <a href='Edit.php?name={$name}'>EDIT</a> </td>
                </tr>
                </table
                ";

            echo "<br>";
        }
    }

    }
?>