<?php
include "../classes/dbcontroller.php";
$dbc = new DBСontroller();

try {
    $dbc->database->insert(
        "user_auth",
        [
            "id" => null,
            "client_number" => $_POST['inputPhoneNumber'],
            "manager_id" => 0,
            "request_type" => $_POST["selectRequestType"],
            "description" => $_POST["inputDescription"],
            "status" => 0
        ]
    );

    echo "<pre>";
    print_r($dbc->database->select("user_auth", ['id', 'login', 'password']));
    echo "</pre>";
}
catch (Exception $ex) {
    print($ex);
}
