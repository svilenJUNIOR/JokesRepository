<?php
    include "../DbContext.php";
    include "./TasksService.php";

    GetAllProjectAndTasks($connectionString);
?>


<br>
<a href="/InterviewTask/Project/Projects.php">Back to the projects</a>