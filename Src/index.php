<?php include "../Config/DbContext.php"; ?>

<form method="POST">
<div>
        <label for="Email">Email: </label>
        <input type="text" name="Email"></input><br>

        <label for="Password">Password: </label>
        <input type="password" name="Password"></input><br>

        <label for="Username">Username: </label>
        <input type="text" name="Username"></input><br>

        <button type="submit" name="Submit">Register</button>
    </div>
</form>