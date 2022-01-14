<?php
include_once "../config/BDD_Connection.php";

function profileDetails($id, $mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM user WHERE id= ?");
    $prepare->execute(array($id));
    $row = $prepare->fetch(PDO::FETCH_ASSOC);
    if (!empty($row)){
        require_once "../view/profile.php";
    }
}


function profileUpdating($id, $mysqlConnection) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["update"]){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $username = $_POST["username"];
        $prepare = $mysqlConnection->prepare("update user set nom = ? ,prenom = ? ,email = ? where id = ?");
        $prepare->execute(array($name, $username, $email, $id));
        
        
    }
}








if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "profile":
            profileDetails($_GET["id"], $mysqlConnection);
            break;
        case "update":
            profileUpdating($_GET["id"], $mysqlConnection);
            header("location: ../view/index.php");
            break;
    }
}
?>