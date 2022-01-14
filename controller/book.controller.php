<?php
include_once "../config/BDD_Connection.php";


function Book($id_user, $id_formule, $mysqlConnection) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["book"]){
        $date = date('Y-m-d H:i:s');
        $prepare = $mysqlConnection->prepare("insert into booking(formule,user,date) values(?,?,?)");
        $prepare->execute(array($id_formule, $id_user, $date));
        header("location: ../view/index.php");
        
    }
}


function bookHistory($id_user, $mysqlConnection) {
    $prepare_formule_history = $mysqlConnection->prepare("SELECT * FROM booking WHERE user= ?");
    $prepare_formule_history->execute(array($id_user));
    $row_formule = $prepare_formule_history->fetchAll(PDO::FETCH_ASSOC);
    $formuls_booked = [];

    foreach($row_formule as $rwf){
        array_push($formuls_booked, $rwf["formule"]);
    }
    
    $final_result = [];
    foreach($formuls_booked as $frmb){
        $prepare_formule = $mysqlConnection->prepare("SELECT * FROM formules WHERE id= ?");
        $prepare_formule->execute(array($frmb));
        $row = $prepare_formule->fetchAll(PDO::FETCH_ASSOC);
        array_push($final_result, $row);
    }
    
    require_once "../view/formule_history.php";
    
}

if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "book":
            Book($_GET["id_user"], $_GET["id_formule"], $mysqlConnection);
            break;
        case "book_history":
            bookHistory($_GET["id_user"], $mysqlConnection);
            break;
    }
}

?>