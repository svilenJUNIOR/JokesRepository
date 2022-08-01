<?php
    include "./ProjectService.php";
    include "../DbContext.php";

    AddProject($connectionString);
?>

<form method="POST">
    <div>
        <label for="Name">ProjectName: </label>
        <input type="text" name="ProjectName"></input><br>

        <button type="submit" name="Submit">Submit</button>
    </div>
</form>

<?php
    GetAllProjects($connectionString);
?>

<br>
<a href="/InterviewTask/Tasks/Tasks.php">See all tasks</a>