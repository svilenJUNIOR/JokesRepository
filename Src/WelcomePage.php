<?php
session_start();
if (isset($_SESSION["Username"])){
    echo "
    <h1> write something funny here so we can have a little bit of a laugh</h1>
    <form method='POST'>
    <textarea cols='50' rows='10' name='Joke'></textarea>
    <button type='submit' name='BigDealButton'>press</button>
    </form>
    ";
    echo "<a href='logout.php'>log out</a>";

    $file = "joke.txt";

    if (isset($_POST["BigDealButton"])){
        $funnyJoke = $_POST["Joke"];
       
        $fileHandler = fopen($file,"w");
        $fileContent = fwrite($fileHandler, $funnyJoke);
        fclose($fileHandler);
    }
}