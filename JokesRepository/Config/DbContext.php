<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "SvilenBigBossMan");
    define("DB_PASS", "123");
    define("DB_NAME", "jokedatabase");

    $connectionString = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($connectionString -> connect_error) die("Connection failed ". $connectionString -> connect_error);
?>