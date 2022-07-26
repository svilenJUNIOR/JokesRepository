<?php
    include "../Config/DbContext.php";
    session_start();

    if (isset($_POST["Submit"])) {
        $Email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_SPECIAL_CHARS);
        $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
        $Username = filter_input(INPUT_POST, "Username", FILTER_SANITIZE_SPECIAL_CHARS);

        echo $Email;
        echo "<br>";
        echo $Password;
        echo "<br>";

        echo $Username;

        if (!empty($Email) && !empty($Password) && !empty($Username)) {
            $sql = "INSERT INTO users (Email, Password, UserName) VALUES 
            ('$Email', '$Password', '$Username')";

            if (mysqli_query($connectionString, $sql)) header("Location: WelcomePage.php");
            else Echo "Error ". mysqli_error($connectionString);
        }
    }
    // get data from form
    // create session
    // create user
    // add user
?>

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