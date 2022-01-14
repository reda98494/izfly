<?php
include_once "../config/BDD_Connection.php";


function formuleDetails($id, $mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM formules WHERE id= ?");
    $prepare->execute(array($id));
    $row = $prepare->fetch(PDO::FETCH_ASSOC);
    if (!empty($row)){
        require_once "../view/formule.php";
    }
}

if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "detail":
           formuleDetails($_GET["id"], $mysqlConnection);
            break;
    }
}

?>