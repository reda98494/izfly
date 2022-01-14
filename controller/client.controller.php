<?php
include_once "../config/BDD_Connection.php";

function allUsers($mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM user");
    $prepare->execute();
    $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($row)){
        require_once "../view/client.php";
    }
}




if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "clients":
            allUsers($mysqlConnection);
            break;
    }
}

?>