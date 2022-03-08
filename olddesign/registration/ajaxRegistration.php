<?php
include "../classes/dbcontroller.php";
$dbc = new DBСontroller();
try {
    $dbc->database->insert(
        "user_auth",
        ["login" => $_POST['inputPhoneNumber'], "password" => $_POST["inputPassword"]]
    );

    echo "<pre>";
    print_r($dbc->database->select("user_auth", ['id', 'login', 'password']));
    echo "</pre>";
}
catch (Exception $ex) {
    print($ex);
}
