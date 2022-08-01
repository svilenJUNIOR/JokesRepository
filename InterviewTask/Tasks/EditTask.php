<?php
    include "../DbContext.php";

    $oldTaskName = $_GET["name"];

    if (isset($_POST["Submit"])) {
        $NewTaskName = filter_input(INPUT_POST, "NewTaskName", FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($NewTaskName)) {
            $sql = "UPDATE `tasks` SET Name = '{$NewTaskName}' WHERE Name = '{$oldTaskName}'";
            if (mysqli_query($connectionString, $sql)) header("Location: Tasks.php");
            
        }
    }
?>

<form method="POST">
    <div>
        <label for="NewTaskName">NewTaskName: </label>
        <input type="text" name="NewTaskName"></input><br>

        <button type="submit" name="Submit">Submit</button>
    </div>
</form>