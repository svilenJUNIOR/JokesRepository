<?php
include "../Config/DbContext.php";
session_start();

if (isset($_POST["Submit"])) {
    $Email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = "SELECT * FROM users WHERE Email = 'svilen@email.com'";
    $result = mysqli_query($connectionString, $query);
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (!empty($user)) {
        $userId = $user[0]["Id"]; 
        $userName = $user[0]["UserName"];

        setcookie('UserName', $userName, time() + 86400);
        $_SESSION["UserId"] = $userId;

        header("Location: WelcomePage.php");
    }
}
?>

<form method="POST">
    <div>
        <label for="Email">Email: </label>
        <input name="Email"></input><br>

        <label for="Password">Password: </label>
        <input type="password" name="Password"></input><br>

        <button type="submit" name="Submit">Login</button>
    </div>
</form>