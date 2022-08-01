<?php
    include "../DbContext.php";

    $oldProjectName = $_GET["name"];

    if (isset($_POST["Submit"])) {
        $NewProjectName = filter_input(INPUT_POST, "NewProjectName", FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($NewProjectName)) {
            $sql = "UPDATE `projects` SET Name = '{$NewProjectName}' WHERE Name = '{$oldProjectName}'";
            if (mysqli_query($connectionString, $sql)) header("Location: Projects.php");
            
        }
    }
?>

<form method="POST">
    <div>
        <label for="NewProjectName">NewProjectName: </label>
        <input type="text" name="NewProjectName"></input><br>

        <button type="submit" name="Submit">Submit</button>
    </div>
</form>