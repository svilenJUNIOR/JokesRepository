<?php
    include "../Config/DbContext.php";

    $result = $connectionString->query("SELECT Id FROM users WHERE email = 'Email'");
    $userId = mysqli_fetch_row($result)[0];
    

?>

<form method="POST">
    <div>
        <label for="Email">Email: </label>
        <input type="text" name="Email"></input><br>

        <label for="Password">Password: </label>
        <input type="password" name="Password"></input><br>

        <button type="submit" name="Submit">Login</button>
    </div>
</form>